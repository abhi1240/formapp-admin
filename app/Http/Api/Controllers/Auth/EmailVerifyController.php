<?php

namespace App\Http\Api\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Seeders;
use Carbon\Carbon;
use Auth;

class EmailVerifyController extends Controller
{
  public function verify_email(Request $request)
    {
      $data = array();
      $id = $request->id;
      $seeder = Seeders::where('id',$id)->first();
      if ($seeder) {
        $verified = $seeder->update([
          'email_verified_at' => Carbon::now(),
        ]);
        if ($verified) {
          $data['msg'] = "Successfully Verified Email";
        }
        return response()->json($data);
      }

    }
}
