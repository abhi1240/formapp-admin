<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Form\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Validator;

class AccountsController extends Controller
{

    public function new_accounts()
    {
      $users = User::where('rights','4')->orderByDesc('id')->get();
      // dd($user);
        return view('admin.accounts.new-staff',compact('users'));
    }

    public function support_staff()
    {
      $users = User::where('rights','0')->orderByDesc('id')->get();
      // dd($users);
        return view('admin.accounts.support-staff',compact('users'));
    }

    public function image_quality_checker()
    {
      $users = User::where('rights','2')->orderByDesc('id')->get();
        return view('admin.accounts.iqc-staff',compact('users'));
    }

    public function content_quality_controller()
    {
      $users = User::where('rights','3')->orderByDesc('id')->get();
        return view('admin.accounts.cqc-staff',compact('users'));
    }

    public function assign_job(Request $request)
    {

      $validator = Validator::make($request->all(), [
           'id' => 'required',
           'rights' => 'required',
       ], [
         'id' => 'Id Error',
         'rights' => 'Right not specified',
       ]);

       if($validator->fails())
       {
         return response()->json(json_encode($validator));
       } else {
          $id = $request->id;

           $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
           $charactersLength = strlen($characters);
           $randomString = 'ISU-';
           for ($i = 0; $i < 6; $i++) {
               $randomString .= $characters[rand(0, $charactersLength - 1)];
           }
           $user_id = $randomString.'-'.$id;


           $user = User::where('id',$id)->first();
           if ($user) {
             $user_update = $user->update([
               'user_id' => $user_id,
               'rights' => $request->rights,
               'approved_at' => Carbon::now(),
             ]);
             // return response()->json(json_encode($user));
             if ($user_update) {

               return response()->json(['success' => 'Successfully assigned job']);

             }else {
               return response()->json(['error' => 'Please Try later']);
              // return response()->json(json_encode(['error' => 'Please Try later']));
             }
           } else {

           }
       }
    }


    public function remove_acc(Request $request)
    {

      $validator = Validator::make($request->all(), [
           'id' => 'required',
       ], [
         'id' => 'Id Error',
       ]);

       if($validator->fails())
       {
         return response()->json(json_encode($validator));
       } else {

           $id = $request->id;
           $user = User::where('id',$id)->first();
           if ($user) {
             $user_update = $user->delete();
             // return response()->json(json_encode($user));
             if ($user_update) {

               return response()->json(['success' => 'Successfully Removed ']);

             }else {
               return response()->json(['error' => 'Please Try later']);
              // return response()->json(json_encode(['error' => 'Please Try later']));
             }
           } else {

           }
       }
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
           $user = User::findOrFail($request->id);
           if ($user) {
             $user_update = $user->update([
               'status' => $request->status,
             ]);
             if ($user_update) {
               return response()->json(['success' => 'Successfully Changed Status ']);
             }else {
               return response()->json(['error' => 'Please Try later']);
             }
           } else {
           }
       }
    }

  }
