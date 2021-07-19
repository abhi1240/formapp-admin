<?php

namespace App\Http\Api\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Model\Seeders;
use Auth;

class LoginController extends Controller
{
  public function login(Request $request){
    // if ($request) {
    //   return response()->json('true');
    // }
    $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $data = array();
        $error = array();
        $credentials = $request->only('email', 'password');
        if (Auth::guard('seeder')->attempt($credentials)) {

          $data['user'] = Auth::guard('seeder')->user();

          return response()->json($data);

        }else {

          $error['api_status'] = 'Unauthorised Token';
          return response()->json($error);
        }
  }
}
