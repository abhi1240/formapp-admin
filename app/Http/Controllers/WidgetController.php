<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class WidgetController
 * @package App\Http\Controllers
 */

class WidgetController extends Controller
{
    /**
     * Display a widget charts of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pageTitle = 'Widget charts';
        $pageDescription = 'Some description for the page';

        return view('widgets.charts', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a widget charts of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function mixed()
    {
        $pageTitle = 'widget mixed';
        $pageDescription = 'Some description for the page';

        return view('widgets.mixed', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a widget charts of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function card()
    {
        $pageTitle = 'widget card';
        $pageDescription = 'Some description for the page';

        return view('widgets.card', compact('pageTitle', 'pageDescription'));
    }
}
