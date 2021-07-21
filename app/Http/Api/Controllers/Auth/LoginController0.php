<?php

namespace App\Http\Api\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Model\Seeders;
use Auth;

class LoginController extends Controller
{
  public function login(Request $request){
    // if ($request) {
    //   return response()->json('true');
    // }
    $validator = Validator::make($request->all(), [
         'email' => 'required',
         'password' => 'required',
       ], [
         'email' => 'email Error',
         'password' => 'password error',
     ]);

     if($validator->fails())
     {
       return response()->json(json_encode($validator));
     } else {
        $data = array();
        $error = array();
        $credentials = $request->only('email', 'password');
        if (Auth::guard('seeder')->attempt($credentials)) {

          $data['user'] = Auth::guard('seeder')->user();

          return response()->json($data);

        }else {
          $error['status'] = 'Unauthorised seeder';
          return response()->json($error);
        }
      }
  }
}
