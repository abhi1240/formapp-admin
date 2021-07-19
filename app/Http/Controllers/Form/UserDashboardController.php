<?php

namespace App\Http\Controllers\form;
use App\Http\Controllers\Form\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\PendingImages;
use App\Models\ApprovedImages;
use App\Models\RejectedImages;
use App\Models\Year;
use App\Models\Month;
use App\Models\Date;
use Carbon\Carbon;
use Auth;

class UserDashboardController extends Controller
{

    public function dashboard()
    {
        return view('user.dashboard.dashboard');
    }

    public function image_explorer()
    {
      $year = Year::orderBy('id')->get();
      $user_id = Auth::user()->id;
      // dd($year);
      $month = Month::orderByDesc('id')->get();
      $date = Date::orderByDesc('id')->get();

      if ($year->isEmpty()) {
        $years = range(2021,2025);
        foreach ($years as $key1 => $value1) {
        $create = Year::create([
          'year' => $value1,
        ]);
        }
      }
      if ($month->isEmpty()) {
        $months = array('January','February','March','April','May','June','July ','August','September','October','November','December',);
        foreach ($months as $key2 => $value2) {
          $create = Month::create([
            'month' => $value2,
          ]);
        }
      }
      if ($date->isEmpty()) {
        $dates = range(1,31);
        foreach ($dates as $key3 => $value3) {
          $create = Date::create([
            'date' => $value3,
          ]);
        }
      }
      $todays_imgs = PendingImages::where('id',$user_id)->whereDate('created_at', Carbon::today())->get();
      $images = PendingImages::where('id',$user_id)->orderByDesc('id')->get();
      $year = PendingImages::where('id',$user_id)->distinct()->get('year');


      // dd($year);
        return view('user.dashboard.image-explorer',compact('todays_imgs','images','date','year','month'));
    }

    public function get_month_folder(Request $request){
      $user_id = Auth::user()->id;
      $year_req =  $request->get('year');
      // $month_name =
      $months = PendingImages::where('id',$user_id)->where('year',$year_req)->distinct()->get('month');

      return View::make('user.dashboard.months-folder', compact('months','year_req'));

      // return view('user.dashboard.month-folder');
    }

    public function get_date_folder(Request $request){
      $user_id = Auth::user()->id;
      $month_req =  $request->get('month');
      $year_req =  $request->get('year');
      // print_r($month_req);
      $dates = PendingImages::where('id',$user_id)->where('year',$year_req)->where('month',$month_req)->distinct()->get('date');

      return View::make('user.dashboard.dates-folder', compact('dates','month_req','year_req'));

      // return view('user.dashboard.month-folder');
    }

    public function get_file(Request $request){
      $user_id = Auth::user()->id;
      $date_req =  $request->get('date');
      $month_req =  $request->get('month');
      $year_req =  $request->get('year');
      $images = PendingImages::where('id',$user_id)->where('year',$year_req)->where('month',$month_req)->where('date',$date_req)->where('date',$date_req)->get();

      return View::make('user.dashboard.files-folder', compact('images'));

      // return view('user.dashboard.month-folder');
    }

}
