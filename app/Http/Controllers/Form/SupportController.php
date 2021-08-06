<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Form\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Languages;
use App\Models\Papers;
use App\Models\PendingImages;
use App\Models\ApprovedImages;
use App\Models\RejectedImages;
use App\Models\SupportLogs;
use Carbon\Carbon;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\DatabaseNotification;
use Auth;

class SupportController extends Controller
{

    public function dashboard()
    {
      $data = array();
      $data['pen_cnt'] = PendingImages::orderByDesc('id')->count();
      $data['apd_cnt'] = ApprovedImages::orderByDesc('id')->count();
      $data['rej_cnt'] = RejectedImages::orderByDesc('id')->count();

        return view('support.dashboard',compact('data'));
    }

    public function languages()
    {
      $languages = Languages::orderByDesc('id')->get();
      // dd($languages);
        return view('support.tables.languages',compact('languages'));
    }

    public function papers()
    {
      $papers = Papers::orderByDesc('id')->get();
      // dd($papers);
        return view('support.tables.papers',compact('papers'));
    }

    public function papers_store(Request $request){

          $name = $request->name;
             $papers =Papers::create([
               'name' => $name,
             ]);
             if ($papers) {
               $user_id = Auth::user()->user_id;
               $user = User::where('user_id',$user_id)->first();
               $support_log = SupportLogs::create([
                 'user_id' => $user_id,
                 'action' => 'Added new paper',
                 'description' => $user->name . ' '.'created new paper'. ' ' .$request->name,
                 'log_date' => Carbon::now(),
               ]);
               return response()->json(['success' => 'Successfully added']);

             }else {
               return response()->json(['error' => 'Please Try later']);
             }
    }

    public function papers_remove(Request $request){
           $id = $request->id;
           $papers = Papers::where('id',$id)->first();
           if ($papers) {
             $papers_remove = $papers->delete();
             if ($papers_remove) {
               $user_id = Auth::user()->user_id;
               $user = User::where('user_id',$user_id)->first();
               $support_log = SupportLogs::create([
                 'user_id' => $user_id,
                 'action' => 'Removed paper',
                 'description' => $user->name . ' '.'removed paper'. ' ' .$request->name,
                 'log_date' => Carbon::now(),
               ]);
               return response()->json(['success' => 'Successfully Removed ']);
             }else {
               return response()->json(['error' => 'Please Try later']);
             }
           } else {

           }
       }

   public function papers_update(Request $request){
          $id = $request->id;
          $name = $request->name;
          $papers = Papers::where('id',$id)->first();
          if ($papers) {
            $papers_update = $papers->update([
              'name' => $name,
            ]);
            if ($papers_update) {
              $user_id = Auth::user()->user_id;
              $user = User::where('user_id',$user_id)->first();
              $support_log = SupportLogs::create([
                'user_id' => $user_id,
                'action' => 'Updated paper',
                'description' => $user->name . ' '.'updated paper'. ' ' .$request->name,
                'log_date' => Carbon::now(),
              ]);
              return response()->json(['success' => 'Successfully updated ']);
            }else {
              return response()->json(['error' => 'Please Try later']);
            }
          } else {

          }
      }

    public function papers_status_update(Request $request){
           $id = $request->id;
           $papers = Papers::where('id',$id)->first();
           if ($papers) {
             $papers_update = $papers->update([
               'status' => $request->status,
             ]);
             if ($papers_update) {
               $user_id = Auth::user()->user_id;
               $user = User::where('user_id',$user_id)->first();
               $support_log = SupportLogs::create([
                 'user_id' => $user_id,
                 'action' => 'updated status of paper',
                 'description' => $user->name . ' '.'updated status of paper'. ' ' .$request->name,
                 'log_date' => Carbon::now(),
               ]);
               return response()->json(['success' => 'Successfully updated ']);
             }else {
               return response()->json(['error' => 'Please Try later']);
             }
           } else {

           }
       }

       public function languages_store(Request $request){
             $name = $request->name;
                $language =Languages::create([
                  'name' => $name,
                ]);
                if ($language) {
                  $user_id = Auth::user()->user_id;
                  $user = User::where('user_id',$user_id)->first();
                  $support_log = SupportLogs::create([
                    'user_id' => $user_id,
                    'action' => 'Added new language',
                    'description' => $user->name . ' '.'created new language'. ' ' .$request->name,
                    'log_date' => Carbon::now(),
                  ]);
                  return response()->json(['success' => 'Successfully added']);

                }else {
                  return response()->json(['error' => 'Please Try later']);
                }
       }

       public function languages_remove(Request $request){
              $id = $request->id;
              $language = Languages::where('id',$id)->first();
              if ($language) {
                $language_remove = $language->delete();
                if ($language_remove) {
                  $user_id = Auth::user()->user_id;
                  $user = User::where('user_id',$user_id)->first();
                  $support_log = SupportLogs::create([
                    'user_id' => $user_id,
                    'action' => 'removed language',
                    'description' => $user->name . ' '.'removed language'. ' ' .$request->name,
                    'log_date' => Carbon::now(),
                  ]);
                  return response()->json(['success' => 'Successfully Removed ']);
                }else {
                  return response()->json(['error' => 'Please Try later']);
                }
              } else {

              }
          }

      public function languages_update(Request $request){
             $id = $request->id;
             $name = $request->name;
             $language = Languages::where('id',$id)->first();
             if ($language) {
               $language_update = $language->update([
                 'name' => $name,
               ]);
               if ($language_update) {
                 $user_id = Auth::user()->user_id;
                 $user = User::where('user_id',$user_id)->first();
                 $support_log = SupportLogs::create([
                   'user_id' => $user_id,
                   'action' => 'Updated language',
                   'description' => $user->name . ' '.'updated language'. ' ' .$request->name,
                   'log_date' => Carbon::now(),
                 ]);
                 return response()->json(['success' => 'Successfully updated ']);
               }else {
                 return response()->json(['error' => 'Please Try later']);
               }
             } else {

             }
         }

       public function languages_status_update(Request $request){
              $id = $request->id;
              $language = Languages::where('id',$id)->first();
              if ($language) {
                $language_update = $language->update([
                  'status' => $request->status,
                ]);
                if ($language_update) {
                  $user_id = Auth::user()->user_id;
                  $user = User::where('user_id',$user_id)->first();
                  $support_log = SupportLogs::create([
                    'user_id' => $user_id,
                    'action' => 'updated status of language',
                    'description' => $user->name . ' '.'updated status of language'. ' ' .$request->name,
                    'log_date' => Carbon::now(),
                  ]);
                  return response()->json(['success' => 'Successfully updated ']);
                }else {
                  return response()->json(['error' => 'Please Try later']);
                }
              } else {

              }
          }


          public function my_account()
          {
            $id = Auth::user()->id;
            $support = User::where('id',$id)->first();
            // dd($support);
              return view('support.my-account',compact('support'));
          }

          public function update_info(Request $request)
          {
            $id = $request->id;

            $support = $support = User::where('id',$id)->first();
            if ($support) {
              $support_update = $support->update([
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

              if ($support_update) {
                $user_id = Auth::user()->user_id;
                $user = User::where('user_id',$user_id)->first();
                $support_log = SupportLogs::create([
                  'user_id' => $user_id,
                  'action' => 'Updated profile',
                  'description' => $user->name . ' '.'updated profile',
                  'log_date' => Carbon::now(),
                ]);
              return redirect('/support/my_account')->with('success','Successfully updated Profile info.');
            }else {
              return redirect('/support/my_account')->with('danger','Please try later.');
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
                    $path = $image->move(public_path('/uploads/users/profile/images/support/'),$filename);

                    $user->profile_pic = $filename;
                    $user->profile_pic_url = URL::asset('/uploads/users/profile/images/support/').'/'.$filename;
                  }
                  $profile_pic_url = $user->profile_pic_url;
              if ($user) {
                $update_new = $user->update([
                  'profile_pic' => $filename,
                  'profile_pic_url' => $profile_pic_url,
                ]);
              }

              if ($update_new) {
                $user_id = Auth::user()->user_id;
                $user = User::where('user_id',$user_id)->first();
                $support_log = SupportLogs::create([
                  'user_id' => $user_id,
                  'action' => 'Updated profile photo',
                  'description' => $user->name . ' '.'updated profile photo',
                  'log_date' => Carbon::now(),
                ]);
                return redirect('/support/my_account')->with('success','profile updated successfilly');
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
              $user_id = Auth::user()->user_id;
              $user = User::where('user_id',$user_id)->first();
              $support_log = SupportLogs::create([
                'user_id' => $user_id,
                'action' => 'Updated password',
                'description' => $user->name . ' '.'updated password',
                'log_date' => Carbon::now(),
              ]);
              return redirect('/support/my_account')->with('success','Password updated successfilly');
            }
          }

  }
