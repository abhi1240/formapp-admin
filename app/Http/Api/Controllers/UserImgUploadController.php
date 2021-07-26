<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Seeders;
use Illuminate\Support\Facades\Crypt;
use App\Models\PendingImages;
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
      $image = $request->attachment;
      // return response()->json($request->attachment);
      $year = Carbon::now()->format('Y');
      $date = Carbon::now()->format('d');
      $month = Carbon::now()->format('F');
      $random_name = $request->paper_title;
      if($token_res) {
        $validator = Validator::make($request->all(), [
             'paper_title' => 'required',
             'publication' => 'required',
             'language_id' => 'required',
             // 'paper_img' => 'required|mimes:jpeg,jfif,png',
           ], [
             'paper_title' => 'Paper Title Error',
             'publication' => 'publication error',
             'language_id' => 'language Error',
             'paper_img' => 'image error',
         ]);

         if($validator->fails())
         {
           return response()->json($validator);
         } else {
           return response()->json($files = $image);
            // return response()->json($request->hasFile('paper_img'));
           $data = array();
           // if($request->hasFile('paper_img')){
           if ($files = $request->file('attachment')) {
             $file = $request->file->store('public/documents');
             return response()->json($file);
                 $image = $request->file('paper_img');
                 // dd($image);
                 $filename = $random_name.".".$request->file('paper_img')->extension();
                 // dd($filename);
                 $path = $image->move(public_path('/storage/files/images/').'/'.$year.'/'.$month.'/'.$date.'/',$filename);

                 $paper_img = $filename;
                 $paper_img_url = URL::asset('/storage/files/images/').'/'.$year.'/'.$month.'/'.$date.'/'.$filename;
               }

               $create = new PendingImages([
                 'is_id' => $is_id,
                 'paper_title' => $request->paper_title,
                 'publication' => $request->publication,
                 'language_id' => $request->language_id,
                 // 'language_id' => $request->language_id,
                 'paper_img' => $paper_img,
                 'paper_img_url' => $paper_img_url,
                 'year' => $year,
                 'month' => $month,
                 'date' => $date,

               ]);

               $save_success = $create->save();
               if ($save_success) {
                 $data['success'] = "success";
                  return response()->json($data);
               }
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
