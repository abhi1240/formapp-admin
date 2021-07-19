<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ChartController
 * @package App\Http\Controllers
 */

class ChartController extends Controller
{
    /**
     * Display a chart of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(){

        $pageTitle = 'Chart Js';
        $pageDescription = 'Some description for the page';

        return view('charts.chart', compact('pageTitle', 'pageDescription'));
    }

     /**
     * Display a google chart of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function googleChart(){

        $pageTitle = 'Google Chart';
        $pageDescription = 'Some description for the page';

        return view('charts.google_chart', compact('pageTitle', 'pageDescription'));
    }

     /**
     * Display a peity chart of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function peityChart(){

        $pageTitle = 'Peity Chart';
        $pageDescription = 'Some description for the page';

        return view('charts.peity_chart', compact('pageTitle', 'pageDescription'));
    }
}
