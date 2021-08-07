<?php

namespace App\Http\Api\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Notifiable;
use App\Notifications\NewUser;
use App\Notifications\NewSeeder;
use App\Models\Seeders;
use App\Models\User;
use App\Mail\VerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Auth;

class RegisterController extends Controller
{
  protected function register(Request $request)
    {
      $validator = Validator::make($request->all(), [
              'name' => 'required',
              'email' => 'required|unique:seeders',
              'phone_num' => 'required|unique:seeders,phone_num|min:10|regex:/^[5-9][0-9]{9}$/',
              'password' => 'required',
         ], [
           'name' => 'name Error',
           'email' => 'email error',
           'phone' => 'phone error',
           'password' => 'password error',
         ]);
         if($validator->fails())
            {
              $data = array();
            $data['errors'] = $validator->errors();
              return response()->json($data);
            } else {
              $data = array();
              $error = array();

              $data['success'] = 'false';
              $data['error'] = 'true';

              $seeder_data = Seeders::create([
                  'name' => $request['name'],
                  'email' => $request['email'],
                  'password' => Hash::make($request['password']),
                  'rights' => $request['rights'],
              ]);

              $data['seeder'] = $seeder_data->toArray();

        if ($seeder_data) {
            $token = Crypt::encryptString($seeder_data->email.$seeder_data->password);
            $enId = Crypt::encryptString($seeder_data->id);
            $e_url = $request->url;
            $url = "$e_url/api/verifyemail/$enId/$token";
            $data['url'] = $e_url;
            $mail = Mail::to($seeder_data->email)->send(new VerifyEmail($seeder_data,$url));

          $admin = User::where('rights', 1)->first();
           if ($admin) {
          $admin->notify(new NewSeeder($seeder_data));
           }

           $data['success'] = 'true';
           $data['error'] = 'false';
           return response()->json($data);

        }else {
          $data['success'] = 'false';
          $data['error'] = 'Unauthorised seeder';
          return response()->json($data);
        }
      }
    }

}
