<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * Class ErrorController
 * @package App\Http\Controllers
 */

class ErrorController extends Controller
{
    /**
     * Display a email inbox of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){

        $pageTitle = '404';
        $pageDescription = '404';

        return view('errors.404', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a maintenance of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function maintenance(){

        $pageTitle = 'maintenance';
        $pageDescription = 'maintenance';

        return view('errors.503', compact('pageTitle', 'pageDescription'));
    }
}
