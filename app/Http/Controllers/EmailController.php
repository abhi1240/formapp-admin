<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class EmailController
 * @package App\Http\Controllers
 */

class EmailController extends Controller
{
    /**
     * Display a email inbox of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){

        $pageTitle = 'Email Inbox';
        $pageDescription = 'Email inbox';

        return view('applications.email.index', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a read email of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function readEmail(){

        $pageTitle = 'Read Email';
        $pageDescription = 'Read email';

        return view('applications.email.read_email', compact('pageTitle', 'pageDescription'));
    }
}
