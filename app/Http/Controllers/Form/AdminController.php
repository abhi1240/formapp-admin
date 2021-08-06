<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Form\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\ApprovedImages;
use App\Models\PendingImages;
use App\Models\RejectedImages;
use App\Models\AdminLogs;
use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;
use Illuminate\Notifications\DatabaseNotification;

class AdminController extends Controller
{

    public function dashboard()
    {
      $today = Carbon::today();
      // $month = Carbon::date('m');
      // dd($today);
      $data = array();
      $data['approved_users'] = Seeders::whereNotNull('approved_at')->count();
      $data['pending_users'] = Seeders::whereNull('approved_at')->count();
      $data['new_accounts'] = User::where('rights','4')->count();
      $data['support_staff'] = User::where('rights','0')->count();
      $data['iqc'] = User::where('rights','2')->count();
      $data['cqc'] = User::where('rights','3')->count();
      $data['approved_img'] = ApprovedImages::orderBy('id')->count();
      $data['pending_img'] = PendingImages::orderBy('id')->count();
      $data['rejected_img'] = RejectedImages::orderBy('id')->count();

      //todays avg

      $data['a_count'] = $a_count = ApprovedImages::where('img_date',$today)->count();
      $data['p_count'] = $p_count = PendingImages::where('created_at',$today)->count();
      $data['r_count'] = $r_count = RejectedImages::where('img_date',$today)->count();

      $data['total_count_today'] = $total_count = $a_count + $p_count + $r_count;
      $apr_img_today = ApprovedImages::where('created_at',$today)->count();
      $rej_img_today = RejectedImages::where('created_at',$today)->count();
      if ($a_count && $p_count && $r_count ) {
        $data['today_apr_avg'] = ($apr_img_today / $total_count) * 100;
        $data['todays_rej_avg'] = ($rej_img_today / $total_count) * 100;
      }



      //end

        return view('admin.dashboard',compact('data'));
    }

    public function user_approve_list()
    {

      $users = Seeders::whereNotNull('approved_at')->get();
        return view('admin.user.approval-users',compact('users'));
    }

    public function pending_users()
    {

      $users = Seeders::whereNull('approved_at')->get();
        return view('admin.user.pending-users',compact('users'));
    }

    public function user_approve(Request $request)
    {
      $id = $request->id;
      $seeder = Seeders::where('id',$id)->first();
      // dd($id);
      $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      $charactersLength = strlen($characters);
      $randomString = 'ISU-';
      for ($i = 0; $i < 6; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      $seeder_id = $randomString.'-'.$id;


      // dd($seeder_id);
      if ($seeder) {
        $update = $seeder->update([
          'approved_at' => now(),
          'seeder_id' => $seeder_id,
        ]);
        if ($update) {

          $admin_log = AdminLogs::create([
            'admin_id' => 'admin',
            'seeder_id' => $seeder_id,
            'action' => 'Seeder approved',
            'description' => 'Admin approved'. $seeder->name,
            'log_date' => Carbon::now(),
          ]);
          return response()->json(['success' => 'User Approved Successfully']);
        }else {
          return response()->json(['error' => 'Please Try Later']);
        }
      }

    }

    public function markasRead (){

        $pageTitle = 'Dashboard';
        $pageDescription = 'Admin dashboard';

        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }

    public function mark_as_read_single_notification(Request $request){
      $id = $request->get('id');
      // dd($id);
      auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
      return redirect()->back();
    }

    public function notifications(){
    return view('admin.notifications');
  }

  public function status_change(Request $request){
    $validator = Validator::make($request->all(), [
         'id' => 'required',
         'status' => 'required',
     ], [
       'id' => 'Id Error',
       'status' => 'status error',
     ]);

     if($validator->fails())
     {
       return response()->json(['error' => 'Please Try later']);
     } else {

         $id = $request->id;
         $user = Seeders::findOrFail($request->id);
         if ($user) {
           $user_update = $user->update([
             'status' => $request->status,
           ]);
           if ($user_update) {

             $admin_log = AdminLogs::create([
               'admin_id' => 'admin',
               'seeder_id' => $user->seeder_id,
               'action' => 'stauts changed',
               'description' => 'Admin changed' . $user->name . 'status',
               'log_date' => Carbon::now(),
             ]);
             return response()->json(['success' => 'Successfully Changed Status ']);
           }else {
             return response()->json(['error' => 'Please Try later']);
           }
         } else {
         }
     }
  }

  public function create_account(request $request){

    return view('admin.accounts.create_account');

  }

  public function store_account(request $request){
    // dd($request);
    $data = array();

    $validator = $request->validate([
      'name'=>'required',
      'email'=>'required|email|unique:users',
      'phone_num' => 'required|unique:users,phone_num|min:10|regex:/^[7-9][0-9]{9}$/',
      'rights' => 'required',
    ]);


    if ($validator) {
      $id_last = User::all()->last()->id;
      $id = $id_last + 1;

      $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      $charactersLength = strlen($characters);
      $randomString = 'ISU-';
      for ($i = 0; $i < 6; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      $user_id = $randomString.'-'.$id;

      if ($request->get('rights') == 0) {
        $position = 'Support';
      }elseif ($request->get('rights') == 2) {
        $position = 'Image Quality Checker';
      }else {
       $position = 'Content Quality Controller';
      }

      $data['password'] = $password  = $request->get('name').$request->get('phone_num');

      $user = user::create([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone_num' => $request->get('phone_num'),
        'rights' => $request->get('rights'),
        'position' => $position,
        'user_id' => $user_id,
        'password' => Hash::make($password),
      ]);

      if ($user) {

        $data['username'] = Session::flash('username', $request->get('email'));
        $data['password'] = Session::flash('password', $password);
        return redirect('/admin/accounts/create_account')->with('success','Successfully created Account');
      }else {
        return redirect('/admin/accounts/create_account')->with('danger','Please try later');
      }


    }

  }

  public function user_create_account(request $request){

    return view('admin.user.create_account');

  }

  public function user_store_account(request $request){
    // dd($request);
    $data = array();

    $validator = $request->validate([
      'name'=>'required',
      'email'=>'required|email|unique:seeders',
      'phone_num' => 'required|unique:seeders,phone_num|min:10|regex:/^[7-9][0-9]{9}$/',
      'rights' => 'required',
    ]);


    if ($validator) {
      $id_last = Seeders::all()->last()->id;
      $id = $id_last + 1;

      $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      $charactersLength = strlen($characters);
      $randomString = 'ISU-';
      for ($i = 0; $i < 6; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      $user_id = $randomString.'-'.$id;

      if ($request->get('rights') == 0) {
        $position = 'Image Seeder';
      }else {
       $position = 'Data Entry';
      }

      $data['password'] = $password  = $request->get('name').$request->get('phone_num');

      $user = Seeders::create([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone_num' => $request->get('phone_num'),
        'rights' => $request->get('rights'),
        'position' => $position,
        'user_id' => $user_id,
        'approved_at' => Carbon::now(),
        'password' => Hash::make($password),
      ]);

      if ($user) {

        $data['username'] = Session::flash('username', $request->get('email'));
        $data['password'] = Session::flash('password', $password);
        return redirect('/admin/user/create_account')->with('success','Successfully created Account');
      }else {
        return redirect('/admin/user/create_account')->with('danger','Please try later');
      }


    }

  }
}
