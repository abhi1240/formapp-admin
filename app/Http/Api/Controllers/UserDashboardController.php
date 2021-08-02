<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Seeders;
use App\Models\Year;
use App\Models\Location;
use App\Models\Languages;
use App\Models\PendingImages;
use App\Models\ApprovedImages;
use App\Models\RejectedImages;
use App\Models\JobsPending;
use App\Models\JobsActivated;
use App\Models\JobsRejected;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Auth;

class UserDashboardController extends Controller
{
  public function user_dashboard(Request $request)
    {
      $is_id = $request->is_id;
      $enc_api_token = $request->api_token;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($api_token);

      if($token_res) {

        $today = Carbon::today();
        $data = array();
        $todays_count_p = PendingImages::where('is_id',$is_id)->whereDate('created_at',$today)->count();
        $todays_count_a = ApprovedImages::where('is_id',$is_id)->whereDate('img_date',$today)->count();
        $todays_count_r = RejectedImages::where('is_id',$is_id)->whereDate('img_date',$today)->count();

        $data['todays_imgs'] = $todays_count_p + $todays_count_a + $todays_count_r;

        $data['pending_imgs_cnt'] = PendingImages::where('is_id',$is_id)->count();
        $data['approved_imgs_cnt'] = ApprovedImages::where('is_id',$is_id)->count();
        $data['rejected_imgs_cnt'] = RejectedImages::where('is_id',$is_id)->count();

        $data['pending_imgs'] = PendingImages::where('is_id',$is_id)->orderByDesc('id')->get();
        $data['approved_imgs'] = ApprovedImages::where('is_id',$is_id)->orderByDesc('id')->get();
        $data['rejected_imgs'] = RejectedImages::where('is_id',$is_id)->orderByDesc('id')->get();

        return response()->json($data);

      } else {
        $error = array();
        $error['message'] = "Api Token Mismatched";
        return response()->json($error);
      }


    }

    public function content_user_dashboard(Request $request)
      {
        $cs_id = $request->cs_id;
        $enc_api_token = $request->api_token;

        $api_token = Crypt::decryptString($enc_api_token);

        $token_res = $this->check_token($api_token);

        if($token_res) {

          $today = Carbon::today();
          $data = array();
          $todays_count_p = JobsPending::where('cs_id',$cs_id)->whereDate('created_at',$today)->count();
          $todays_count_a = JobsActivated::where('cs_id',$cs_id)->whereDate('created_at',$today)->count();
          $todays_count_r = JobsRejected::where('cs_id',$cs_id)->whereDate('created_at',$today)->count();

          $data['todays_jobs'] = $todays_count_p + $todays_count_a + $todays_count_r;

          $data['pending_jobs_cnt'] = JobsPending::where('cs_id',$cs_id)->count();
          $data['approved_jobs_cnt'] = JobsActivated::where('cs_id',$cs_id)->count();
          $data['rejected_jobs_cnt'] = JobsRejected::where('cs_id',$cs_id)->count();

          $data['pending_jobs'] = JobsPending::where('cs_id',$cs_id)->orderByDesc('id')->get();
          $data['approved_jobs'] = JobsActivated::where('cs_id',$cs_id)->orderByDesc('id')->get();
          $data['rejected_jobs'] = JobsRejected::where('cs_id',$cs_id)->orderByDesc('id')->get();

          return response()->json($data);

        } else {
          $error = array();
          $error['message'] = "Api Token Mismatched";
          return response()->json($error);
        }


      }

    public function seeder_profile_details(Request $request){
      $is_id = $request->is_id;
      $enc_api_token = $request->api_token;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($api_token);

      if($token_res) {
        $data = array();
        $data['seeder_details'] = Seeders::where('seeder_id',$is_id)->first();
        $data['languages'] = Languages::orderBy('id')->get();

        return response()->json($data);

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
