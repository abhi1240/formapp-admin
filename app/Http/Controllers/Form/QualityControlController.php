<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Form\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\DatabaseNotification;
use App\Models\JobsPending;
use App\Models\JobsActivated;
use App\Models\JobsRejected;
use Auth;


class QualityControlController extends Controller
{

    public function dashboard()
    {
      $data = array();
      $data['pen_cnt'] = JobsPending::orderByDesc('id')->count();
      $data['apd_cnt'] = JobsActivated::orderByDesc('id')->count();
      $data['rej_cnt'] = JobsRejected::orderByDesc('id')->count();
        return view('quality-controller.dashboard',compact('data'));
    }

    public function my_account()
    {
      $id = Auth::user()->id;
      $qcchecker = User::where('id',$id)->first();

        return view('quality-controller.my-account',compact('qcchecker'));
    }

    public function update_info(Request $request)
    {
      $id = $request->id;

      $qchecker = $qchecker = User::where('id',$id)->first();
      if ($qchecker) {
        $qchecker_update = $qchecker->update([
          'name' => $request->name,
          'email' => $request->email,
          'company_name' => $request->company_name,
          'linked_account' => $request->linked_account,
          'website' => $request->website,
          'position' => $request->position,
          'office_num' => $request->office_num,
          'phone_num' => $request->phone_num,
          'address' => $request->address,
        ]);

        if ($qchecker_update) {
        return redirect('/quality_controller/my_account')->with('success','Successfully updated Profile info.');
      }else {
        return redirect('/quality_controller/my_account')->with('danger','Please try later.');
      }
      }
    }

    public function upload_profile_pic(Request $request){
        $id = $request->get('id');
        $user = User::where('id',$id)->first();
        $name = $user->name;
        $profile_pic = $request->get('profile_pic');
        if($request->hasFile('profile_pic')){
              $image = $request->file('profile_pic');
              // dd($image);
              $filename = $name.".".$request->file('profile_pic')->extension();
              // dd($filename);
              $path = $image->move(public_path('/uploads/users/profile/images/quality_controller/'),$filename);

              $user->profile_pic = $filename;
              $user->profile_pic_url = URL::asset('/uploads/users/profile/images/quality_controller/').'/'.$filename;
            }
            $profile_pic_url = $user->profile_pic_url;
        if ($user) {
          $update_new = $user->update([
            'profile_pic' => $filename,
            'profile_pic_url' => $profile_pic_url,
          ]);
        }

        if ($update_new) {
          return redirect('/quality_controller/my_account')->with('success','profile updated successfilly');
        }

    }

    public function reset_password(Request $request){

      $id = $request->get('id');
      $user = User::where('id',$id)->first();

      $validated = $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'password' => ['required'],
            'password_confirmation' => ['same:password'],
        ]);
      if ($validated) {
      $change_password = $user->update([
        'password' => Hash::make($request->get('password')),
      ]);
      }
      if ($change_password) {
        return redirect('/quality_controller/my_account')->with('success','Password updated successfilly');
      }
    }

  }
