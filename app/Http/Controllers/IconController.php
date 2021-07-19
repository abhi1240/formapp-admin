<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class IconController
 * @package App\Http\Controllers
 */

class IconController extends Controller
{
    /**
     * Display a feather icons of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){

        $pageTitle = 'Feather Icons';
        $pageDescription = 'Some description for the page';

        return view('icons.father_icons', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a font awesome of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function fontAwesome(){

        $pageTitle = 'Font Awesome Icons';
        $pageDescription = 'Some description for the page';

        return view('icons.font_awesome', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a line awesome of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function lineAwesome(){

        $pageTitle = 'Line Awesome Icons';
        $pageDescription = 'Some description for the page';

        return view('icons.line_awesome', compact('pageTitle', 'pageDescription'));
    }
}
