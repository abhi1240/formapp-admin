<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Seeders;
use Illuminate\Support\Facades\Crypt;
use App\Models\PendingImages;
use App\Models\ApprovedImages;
use App\Models\RejectedImages;
use App\Models\MasterTables;
use App\Models\Languages;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Carbon\Carbon;
use Auth;

class UserImgUploadController extends Controller
{
  public function user_image_upload(Request $request)
    {

      $is_id = $request->is_id;
      $enc_api_token = $request->api_token;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($api_token);
      // return response()->json($request->attachment);
      $year = Carbon::now()->format('Y');
      $date = Carbon::now()->format('d');
      $month = Carbon::now()->format('F');
      $random_name = $request->paper_title;

      if($token_res) {
        $data = array();
        $error = array();

        $data['success'] = 'false';
        $data['error'] = 'true';
        $data['duplicate'] = 'true';

        $title_check_p = PendingImages::where('paper_title',$random_name)->exists();
        $title_check_a = ApprovedImages::where('paper_title',$random_name)->exists();
        $title_check_r = RejectedImages::where('paper_title',$random_name)->exists();
        // return response()->json($title_check_p && $title_check_a && $title_check_r);
        if ($title_check_p && $title_check_a && $title_check_r) {
          $data['success'] = 'false';
          $data['error'] = 'false';
          $data['duplicate'] = 'true';
          return response()->json($data);
        }else {
          if ($files = $request->file('paper_img')) {

                $image = $request->file('paper_img');
                // dd($image);
                $filename = $random_name.".".$request->file('paper_img')->extension();
                // dd($filename);
                $path = $image->move(public_path('/storage/files/images/').'/'.$year.'/'.$month.'/'.$date.'/',$filename);

                $paper_img = $filename;
                $paper_img_url = URL::asset('/storage/files/images/').'/'.$year.'/'.$month.'/'.$date.'/'.$filename;
              }

              $master_tbl = MasterTables::where('name','PendingImages')->first();
              if ($master_tbl) {
                $success[] = $master_tbl->update([
                  'name' => 'PendingImages',
                  'index' => $master_tbl->index + 1 ,
                ]);
              }else {
                $success[] = MasterTables::create([
                  'name' => 'PendingImages',
                  'index' => '0',
                ]);
              }
              $master_tbl = MasterTables::where('name','PendingImages')->first();
              $languages = Languages::where('id',$request->language_id)->first();
              // return response()->json($master_tbl->index);
              if ($success) {
                $create = new PendingImages([
                  'id' =>  $master_tbl->index,
                  'is_id' => $is_id,
                  'paper_title' => $request->paper_title,
                  'publication' => $request->publication,
                  'language_id' => $request->language_id,
                  'language' => $languages->name,
                  'paper_img' => $paper_img,
                  'paper_img_url' => $paper_img_url,
                  'year' => $year,
                  'month' => $month,
                  'date' => $date,

                ]);
              }
              // return response()->json($create);


              $save_success = $create->save();
              if ($save_success) {

                $data['success'] = 'true';
                $data['error'] = 'false';
                $data['duplicate'] = 'false';
                return response()->json($data);
              } else {
                $data['success'] = 'false';
                $data['error'] = 'true';
                $data['duplicate'] = 'false';
                return response()->json($data);
              }
        }



         }else {
           $error = array();
           $error['error'] = "Api Token Mismatched";
           return response()->json($error);
         }

    }

    public function upload_profile_picture(Request $request){
      // return response()->json($request);
      $is_id = $request->is_id;
      $enc_api_token = $request->api_token;

      $api_token = Crypt::decryptString($enc_api_token);
      $token_res = $this->check_token($api_token);
      if($token_res) {
        $data = array();
        $error = array();

        $data['success'] = 'false';
        $data['error'] = 'true';
        $seeders = Seeders::where('seeder_id',$is_id)->first();
        $random_name = $seeders->seeder_id;
        if ($seeders) {
          if ($files = $request->file('profile_pic')) {

                $image = $request->file('profile_pic');
                // dd($image);
                $filename = $random_name.".".$request->file('profile_pic')->extension();
                // dd($filename);
                $path = $image->move(public_path('/storage/files/images/profile_pic/'),$filename);

                $paper_img = $filename;
                $paper_img_url = URL::asset('/storage/files/images/profile_pic/').'/'.$filename;
              }

              $seeder_update = $seeders->update([
                'profile_pic' => $paper_img,
                'profile_pic_url' => $paper_img_url,
              ]);
        }

        if ($seeder_update) {
          $data['success'] = 'true';
          $data['error'] = 'false';
          return response()->json($data);
        }
        else {
          $data['success'] = 'false';
          $data['error'] = 'true';
          return response()->json($data);
        }

      }else {
        $error = array();
        $error['error'] = "Api Token Mismatched";
        return response()->json($error);
      }
    }

    public function check_token($token){
          $seeder = Seeders::where('api_token',$token)->first();
          if ($seeder) {
            return true;
          } else {
            return false;
          }
    }
}
