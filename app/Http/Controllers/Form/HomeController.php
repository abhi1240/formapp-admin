<?php

namespace App\Http\Controllers\form;
use App\Http\Controllers\Form\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function profile_setting()
    {

        $userid = Auth::user()->id;
        $user = User::where('id',$userid)->first();
        // dd($user);
        return view('user.profile-setting',compact('user'));
    }


    public function image_update()
    {
        return view('user.image-update');
    }

    public function change_password()
    {
      $userid = Auth::user()->id;
      $user = User::where('id',$userid)->first();
        return view('user.change-password',compact('user'));
    }

    public function approval()
    {
        return view('user.approve');
    }

    public function update_user_info(Request $request){
        $user_id = $request->get('id');
        $user_update = User::where('id',$user_id)->first();
        $oldemail = $user_update->email;
        $newemail = $request->get('email');
        if ($oldemail == $newemail) {
          $update_old = $user_update->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'company_name' => $request->get('company_name'),
            'linked_account' => $request->get('linked_account'),
            'website' => $request->get('website'),
            'position' => $request->get('position'),
            'office_num' => $request->get('office_num'),
            'phone_num' => $request->get('phone_num'),
            'address' => $request->get('address'),
          ]);
          if ($update_old) {
            return redirect('/profile-setting')->with('success','profile updated successfilly');
          }
        }else {
          // $email_verified_at = User::where('id',$user_id)->delete('email_verified_at');
            $update_new = $user_update->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'company_name' => $request->get('company_name'),
            'linked_account' => $request->get('linked_account'),
            'email_verified_at' => NULL,
            'website' => $request->get('website'),
            'position' => $request->get('position'),
            'office_num' => $request->get('office_num'),
            'phone_num' => $request->get('phone_num'),
            'address' => $request->get('address'),
          ]);
          if ($update_new) {
            return redirect('/email/verify')->with('success','profile updated successfilly');
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
              $path = $image->move(public_path('/uploads/users/profile/images/'),$filename);

              $user->profile_pic = $filename;
              $user->profile_pic_url = URL::asset('/uploads/users/profile/images/').'/'.$filename;
            }
            $profile_pic_url = $user->profile_pic_url;
        if ($user) {
          $update_new = $user->update([
            'profile_pic' => $filename,
            'profile_pic_url' => $profile_pic_url,
          ]);
        }

        if ($update_new) {
          return redirect('/profile-setting')->with('success','profile updated successfilly');
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
        return redirect('/change-password')->with('success','Password updated successfilly');
      }
    }
}
