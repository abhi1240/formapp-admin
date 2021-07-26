<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Location;
use App\Models\Seeders;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

class LocationController extends Controller
{
  public function get_states(Request $request)
    {
      $is_id = $request->is_id;
      $enc_api_token = $request->api_token;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($enc_api_token);

      if($token_res) {
        $data = array();
        $data['states'] = Location::where('status','1')->select('state')->orderBy('id')->distinct()->get();

        $data['message'] = "Success";
        if ($data['states']) {
          return response()->json($data);
        }else {
        $data['message'] = "no data available";
        return response()->json($data);
        }

      } else {
        $error = array();
        $error['message'] = "Api Token Mismatched";
        return response()->json($error);
      }

    }

      public function get_citys(Request $request)
        {
          $is_id = $request->is_id;
          $enc_api_token = $request->api_token;

          $api_token = Crypt::decryptString($enc_api_token);

          $token_res = $this->check_token($enc_api_token);

          if($token_res) {
            $data = array();
            $data['states'] = Location::where('status','1')->select('city')->orderBy('id')->distinct()->get();

            $data['message'] = "Success";
            if ($data['states']) {
              return response()->json($data);
            }else {
            $data['message'] = "no data available";
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
