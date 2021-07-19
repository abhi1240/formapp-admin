<?php

namespace App\Http\Api\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Notifications\NewUser;
use App\Models\Seeders;
use Illuminate\Support\Str;
use Auth;

class RegisterController extends Controller
{
  protected function register(Request $request)
    {
      $validator = Validator::make($request->all(), [
              'name' => 'required',
              'email' => 'required|unique:seeders',
              'password' => 'required',
         ], [
           'name' => 'name Error',
           'email' => 'email error',
           'password' => 'password error',
         ]);
         if($validator->fails())
            {
              return response()->json(json_encode($validator));
            } else {
        $seeder = Seeders::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $data = array();
        $error = array();
        if ($seeder) {
          $data['seeder'] = Auth::user();
          return response()->json($data);
        }else {
          return response()->json($error);
        }
      }
    }

}
