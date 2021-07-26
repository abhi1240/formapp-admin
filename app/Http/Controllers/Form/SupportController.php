<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Form\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Languages;
use App\Models\Papers;
use Carbon\Carbon;
use Illuminate\Notifications\DatabaseNotification;

class SupportController extends Controller
{

    public function dashboard()
    {
        return view('support.dashboard');
    }

    public function languages()
    {
      $languages = Languages::orderByDesc('id')->get();
      // dd($languages);
        return view('support.tables.languages',compact('languages'));
    }

    public function papers()
    {
      $papers = Papers::orderByDesc('id')->get();
      // dd($papers);
        return view('support.tables.papers',compact('papers'));
    }

  }
