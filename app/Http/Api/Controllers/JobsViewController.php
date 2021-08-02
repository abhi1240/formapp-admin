<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Seeders;
use App\Models\Year;
use App\Models\PendingImages;
use App\Models\ApprovedImages;
use App\Models\RejectedImages;
use App\Models\JobsPending;
use App\Models\JobsActivated;
use App\Models\JobsRejected;
use App\Models\JobsCategory;
use App\Models\JobsRejectCategory;
use App\Models\JobsApprovedCategory;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Auth;

class JobsViewController extends Controller
{
  public function pending_job_view(Request $request)
    {
      $cs_id = $request->cs_id;
      $img_id = $request->img_id;
      $enc_api_token = $request->api_token;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($api_token);

      if($token_res) {

        $today = Carbon::today();
        $data = array();

        $data['pending_job'] = JobsPending::where('cs_id',$cs_id)->where('img_id',$img_id)->first();
        $data['category'] = JobsCategory::where('cs_id',$cs_id)->where('img_id',$img_id)->get();

        return response()->json($data);

      } else {
        $error = array();
        $error['message'] = "Api Token Mismatched";
        return response()->json($error);
      }

    }

    public function approved_job_view(Request $request)
      {
        $cs_id = $request->cs_id;
        $img_id = $request->img_id;
        $enc_api_token = $request->api_token;

        $api_token = Crypt::decryptString($enc_api_token);

        $token_res = $this->check_token($api_token);

        if($token_res) {

          $today = Carbon::today();
          $data = array();

          $data['pending_job'] = JobsActivated::where('cs_id',$cs_id)->where('img_id',$img_id)->first();
          $data['category'] = JobsApprovedCategory::where('cs_id',$cs_id)->where('img_id',$img_id)->get();

          return response()->json($data);

        } else {
          $error = array();
          $error['message'] = "Api Token Mismatched";
          return response()->json($error);
        }

      }

      public function rejected_job_view(Request $request)
        {
          $cs_id = $request->cs_id;
          $img_id = $request->img_id;
          $enc_api_token = $request->api_token;

          $api_token = Crypt::decryptString($enc_api_token);

          $token_res = $this->check_token($api_token);

          if($token_res) {

            $today = Carbon::today();
            $data = array();

            $data['pending_job'] = JobsRejected::where('cs_id',$cs_id)->where('img_id',$img_id)->first();
            $data['category'] = JobsRejectCategory::where('cs_id',$cs_id)->where('img_id',$img_id)->get();

            return response()->json($data);

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
