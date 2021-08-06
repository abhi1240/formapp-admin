<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Seeders;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use App\Models\ImageSeederLogs;
use App\Models\ContentSeederLogs;
use Illuminate\Support\Facades\Hash;
use Auth;

class ResetPasswordController extends Controller
{
  public function reset_password(Request $request)
    {
      $is_id = $request->is_id;
      $enc_api_token = $request->api_token;

      $api_token = Crypt::decryptString($enc_api_token);

      $token_res = $this->check_token($api_token);

      if($token_res) {
        $data = array();
        $error = array();

        $data['success'] = 'false';
        $data['error'] = 'true';
        $seeder = Seeders::where('seeder_id',$is_id)->first();
        if ($seeder) {
          $validated = $request->validate([
                'password' => ['required'],
                'password_confirmation' => ['same:password'],
            ]);
          if ($validated) {
          $change_password = $seeder->update([
            'password' => Hash::make($request->password),
          ]);
          }
        }
        if ($change_password) {
          if ($seeder->rights == 0) {
            $log = ImageSeederLogs::create([
              'seeder_id' => $is_id,
              'action' => 'Password changed',
              'description' =>  $seeder->name.' '.'updated password',
              'log_date' => Carbon::now(),
            ]);
          }else {
            $log = ContentSeederLogs::create([
              'seeder_id' => $is_id,
              'action' => 'Profile updated',
              'description' =>  $seeder->name.' '.'updated password',
              'log_date' => Carbon::now(),
            ]);
          }

          $data['success'] = 'true';
          $data['error'] = 'false';
          return response()->json($data);
        }else {
          $data['success'] = 'false';
          $data['error'] = 'true';
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
