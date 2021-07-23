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
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Auth;

class UserExplorerController extends Controller
{
  public function user_explorer(Request $request)
    {
      $is_id = $request->is_id;
      $enc_api_token = $request->api_token;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($api_token);

      if($token_res) {
        $today = Carbon::today();
        $data = array();

        $year = Year::orderBy('id')->get();

        if ($year->isEmpty()) {
          $years = range(2021,2025);
          foreach ($years as $key1 => $value1) {
          $create = Year::create([
            'year' => $value1,
          ]);
          }
        }
        $data['todays_imgs'] = ApprovedImages::where('is_id',$is_id)->whereDate('created_at',$today)->get();
        $data['images'] = ApprovedImages::where('is_id',$is_id)->orderByDesc('id')->get();
        $data['year'] = ApprovedImages::where('is_id',$is_id)->distinct()->get('year');

        return response()->json($data);

      } else {
        $error = array();
        $error['message'] = "Api Token Mismatched";
        return response()->json($error);
      }


    }

    public function user_explorer_month(Request $request){
      $is_id = $request->is_id;
      $enc_api_token = $request->api_token;
      $year = $request->year;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($api_token);
      if($token_res) {
        $data = array();
        $data['month'] = ApprovedImages::where('is_id',$is_id)->where('year',$year)->distinct()->get('month');
        $data['year'] = $request->year;
        return response()->json($data);

      } else {
        $error = array();
        $error['message'] = "Api Token Mismatched";
        return response()->json($error);
      }

    }

    public function user_explorer_date(Request $request){
      $is_id = $request->is_id;
      $enc_api_token = $request->api_token;
      $year = $request->year;
      $month = $request->month;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($api_token);

      if($token_res) {
        $data = array();
        $data['date'] = ApprovedImages::where('is_id',$is_id)->where('year',$year)->where('month',$month)->distinct()->get('date');
        $data['year'] = $request->year;
        $data['month'] = $request->month;
        return response()->json($data);

      } else {
        $error = array();
        $error['message'] = "Api Token Mismatched";
        return response()->json($error);
      }

    }

    public function user_explorer_file(Request $request){
      $is_id = $request->is_id;
      $enc_api_token = $request->api_token;
      $year = $request->year;
      $month = $request->month;
      $date= $request->date;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($api_token);

      if($token_res) {
        $data = array();
        $data['image'] = ApprovedImages::where('is_id',$is_id)->where('year',$year)->where('month',$month)->where('date',$date)->get();
        $data['year'] = $request->year;
        $data['month'] = $request->month;
        $data['date'] = $request->date;
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
