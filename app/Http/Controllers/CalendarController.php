<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class CalendarController
 * @package App\Http\Controllers
 */

class CalendarController extends Controller
{
    /**
     * Display a calendar of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function  index(){

        $pageTitle = 'Calendar';
        $pageDescription = 'My Calendars';

       return view('applications.calendar', compact('pageTitle', 'pageDescription'));
    }
}
