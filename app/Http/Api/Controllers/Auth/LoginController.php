<?php

namespace App\Http\Api\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Seeders;
use Auth;

class LoginController extends Controller
{
  public function login(Request $request){

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

        $data['success'] = 'false';
        $data['error'] = 'true';


        $seeder = Seeders::where('email', $request->email)->first();
        $credentials = $request->only('email', 'password');
        if (Auth::guard('seeder')->attempt($credentials)) {


          $api_token = $request->api_token;
          $new_session_id = $request->session_id;

          if ($seeder->session_id != '') {
                $last_session = \Session::getHandler()->read($seeder->session_id);

                if ($last_session) {
                    if (\Session::getHandler()->destroy($seeder->session_id)) {

                    }
                }
            }
            Seeders::where('id', $seeder->id)->update(['api_token' => $api_token]);
            Seeders::where('id', $seeder->id)->update(['session_id' => $new_session_id]);
           $data['user'] = Seeders::where('id', $seeder->id)->first();

           if($data['user']) {

             $data['success'] = 'true';
             $data['error'] = 'false';
             return response()->json($data);

           } else {
             $data['success'] = 'false';
             $data['error'] = 'true';
             return response()->json($data);
           }

        }else {
          $data['success'] = 'false';
          $data['error'] = 'Unauthorised seeder';
          return response()->json($data);
        }
      }
  }
}
