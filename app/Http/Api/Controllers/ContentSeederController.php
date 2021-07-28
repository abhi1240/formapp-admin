<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Seeders;
use App\Models\Year;
use App\Models\ApprovedImages;
use App\Models\JobsPending;
use App\Models\JobsCategory;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Auth;

class ContentSeederController extends Controller
{
  public function approved_images(Request $request)
    {
      $enc_api_token = $request->api_token;
      $cs_id = $request->cs_id;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($api_token);

      if($token_res) {

        $today = Carbon::today();
        $data = array();
        $cs_id_count = ApprovedImages::where('cs_id',$cs_id)->count();
        if ($cs_id_count > 0) {
          $uncheck_img = ApprovedImages::where('cs_id',$cs_id)->where('updated_at','<',Carbon::parse('-24 hours'))->get();
          if ($uncheck_img) {
            foreach ($uncheck_img as $key => $img_uncheck) {
              $update_uncheck = $img_uncheck->update([
                'cs_id' => NULL,
              ]);
            }
          }
        }
        $check_limit = 5 - $cs_id_count;

        if ($check_limit != 0) {
          $images = ApprovedImages::whereNull('cs_id')->orderByDesc('id')->limit($check_limit)->get();
          foreach ($images as $key => $img) {
            $update = $img->update([
              'cs_id' => $cs_id,
            ]);
          }
        }

        $data['approved_imgs'] = ApprovedImages::where('cs_id',$cs_id)->orderByDesc('id')->get();

        $data['message'] = "Success";
        return response()->json($data);

      } else {
        $error = array();
        $error['message'] = "Api Token Mismatched";
        return response()->json($error);
      }


    }

    public function data_image(Request $request){
      $img_id = $request->img_id;
      $enc_api_token = $request->api_token;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($api_token);

      if($token_res) {

        $data = array();

        $data['data_img'] = ApprovedImages::where('id',$img_id)->first();

        $data['message'] = "Success";
        return response()->json($data);

      } else {
        $error = array();
        $error['message'] = "Api Token Mismatched";
        return response()->json($error);
      }
    }

    public function data_entry_form_upload(Request $request)
      {
        // return response()->json($request);
        $img_id = $request->img_id;
        $var_title = $request->var_title;
        $var_description = $request->var_description;
        $apply_date = $request->apply_date;
        $walk_in = $request->walk_in;
        $phone = $request->phone;
        $email = $request->email;
        $company_name = $request->company_name;
        $state = $request->state;
        $city = $request->city;
        $zip = $request->zip;
        $address = $request->address;
        $c_phone = $request->c_phone;
        $c_email = $request->c_email;
        $website = $request->website;

        $cs_id = $request->cs_id;
        $enc_api_token = $request->api_token;
        // return response()->json($request);
        $api_token = Crypt::decryptString($enc_api_token);

        $token_res = $this->check_token($api_token);

        if($token_res) {

          $today = Carbon::today();
          $data = array();
          $approved_images = ApprovedImages::where('id',$img_id)->first();

          if ($approved_images) {
            $pending_jobs = JobsPending::create([
              'img_id' => $approved_images->id,
              'is_id' => $approved_images->is_id,
              'cs_id' => $cs_id,
              'paper_title' => $approved_images->paper_title,
              'publication' => $approved_images->publication,
              'language_id' => $approved_images->language_id,
              'language' => $approved_images->language,
              'paper_img' => $approved_images->paper_img,
              'paper_img_url' => $approved_images->paper_img_url,
              'img_date' => $approved_images->img_date,
              'var_title' => $var_title,
              'var_description' => $var_description,
              'apply_date' => $apply_date,
              'walk_in' => $walk_in,
              'phone' => $phone,
              'email' => $email,
              'company_name' => $company_name,
              'address' => $address,
              'state' => $state,
              'city' => $city,
              'zip' => $zip,
              'c_phone' => $c_phone,
              'c_email' => $c_email,
              'website' => $website,
            ]);
            if (count($request->placements) > '0') {
              foreach ($request->placements as $key => $value) {
                $create_categories = JobsCategory::create([
                  'img_id' => $approved_images->id,
                  'cs_id' => $cs_id,
                  'content_id' => $pending_jobs->id,
                  'category' => $value['category'],
                  'openings' => $value['openings'],
                  'experience' => $value['experience'],
                ]);
              }
            }

          }
          if ($pending_jobs) {
            $approved_images->delete();
            $data['message'] = "Success";
            return response()->json($data);
          }


        } else {
          $error = array();
          $error['message'] = "Api Token Mismatched";
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
