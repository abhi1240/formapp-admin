<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Form\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Seeders;
use Carbon\Carbon;
use Illuminate\Notifications\DatabaseNotification;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
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
}
