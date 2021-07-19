<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Form\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Notifications\DatabaseNotification;

class QualityControlController extends Controller
{

    public function dashboard()
    {
        return view('quality-controller.dashboard');
    }

  }
