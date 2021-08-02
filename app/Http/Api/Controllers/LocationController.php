<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Location;
use App\Models\Seeders;
use App\Models\Papers;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

class LocationController extends Controller
{
      public function get_citys(Request $request)
        {
          $is_id = $request->is_id;
          $enc_api_token = $request->api_token;
          $search = $request->search;
          $api_token = Crypt::decryptString($enc_api_token);

          $token_res = $this->check_token($api_token);

          if($token_res) {
            $data = array();
            $data['citys'] = Location::orderBy('city')->select('city')->where('city', 'like', '%' .$search . '%')->limit(5)->get();


            $data['success'] = "Success";
            if ($data['citys']) {
              return response()->json($data);
            }else {
            $data['error'] = "no data available";
            return response()->json($data);
            }

          } else {
            $error = array();
            $error['message'] = "Api Token Mismatched";
            return response()->json($error);
          }

        }


        public function papers_autocomplete(Request $request)
          {
            $is_id = $request->is_id;
            $enc_api_token = $request->api_token;
            $search = $request->search;
            $api_token = Crypt::decryptString($enc_api_token);

            $token_res = $this->check_token($api_token);

            if($token_res) {
              $data = array();
              $data['papers'] = Papers::orderBy('name')->select('name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();


              $data['success'] = "Success";
              if ($data['papers']) {
                return response()->json($data);
              }else {
              $data['error'] = "no data available";
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
