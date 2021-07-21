<?php

namespace App\Http\Api\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Seeders;
use Auth;

class LogoutController extends Controller
{
  public function logout(Request $request)
    {
      $data = array();
      $id = $request->id;
      $api_token = $request->api_token;
      $seeder = Seeders::where('id',$id)->where('api_token',$api_token)->first();
      if ($seeder) {
        $logout = $seeder->update([
          'api_token' => NULL,
        ]);
        if ($logout) {
          $data['msg'] = "Successfully logout";
        }
        return response()->json($data);
      }

    }
}
