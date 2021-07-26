<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Seeders;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Auth;

class UserSettingsController extends Controller
{
  public function user_profile_setting(Request $request)
    {
      $is_id = $request->is_id;
      $enc_api_token = $request->api_token;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($api_token);

      if($token_res) {
        $data = array();
        $seeder = Seeders::where('seeder_id',$is_id)->first();
        $oldemail = $seeder->email;
        $newemail = $request->email;
        if ($seeder) {
          if ($oldemail == $newemail) {
            $seeder_update = $seeder->update([
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
          }else {
            $seeder_update = $seeder->update([
              'name' => $request->name,
              'email' => $request->email,
              'company_name' => $request->company_name,
              'linked_account' => $request->linked_account,
              'email_verified_at' => NULL,
              'website' => $request->website,
              'position' => $request->position,
              'office_num' => $request->office_num,
              'phone_num' => $request->phone_num,
              'address' => $request->address,
            ]);
          }
        }
        if ($seeder_update) {
          $data['message'] = "success";
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
