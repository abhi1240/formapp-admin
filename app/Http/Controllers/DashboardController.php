<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */

class DashboardController extends Controller
{
    /**
     * Display a dashboard social media of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){

        $pageTitle = 'Social Media Dashboard';
        $pageDescription = 'Some description for the page';

        return view('dashboard.social_media', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a dashboard business of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function business(){

        $pageTitle = 'FineTech / Business Dashboard';
        $pageDescription = 'Some description for the page';

        return view('dashboard.business', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a dashboard performance of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function performance(){

        $pageTitle = 'Website Performance Dashboard';
        $pageDescription = 'Some description for the page';

        return view('dashboard.performance', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a dashboard ecommerce of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function ecommerce(){

        $pageTitle = 'Ecommerce Dashboard';
        $pageDescription = 'Some description for the page';

        return view('dashboard.ecommerce', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a dashboard crm of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function crm(){

        $pageTitle = 'CRM Dashboard';
        $pageDescription = 'Some description for the page';

        return view('dashboard.crm', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a dashboard sales performance of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function sales(){

        $pageTitle = 'Sales Performance Dashboard';
        $pageDescription = 'Some description for the page';

        return view('dashboard.sales', compact('pageTitle', 'pageDescription'));
    }
}
