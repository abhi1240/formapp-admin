<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class SocialAppController
 * @package App\Http\Controllers
 */

class SocialAppController extends Controller
{
    /**
     * Display a profile of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index() {
        $pageTitle = 'Social App Profile';
        $pageDescription = 'Some description for the page';

        return view('applications.social-app.profile', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a profile setting of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function profileSetting() {
        $pageTitle = 'Social App Profile';
        $pageDescription = 'Some description for the page';

        return view('applications.social-app.profile_setting', compact('pageTitle', 'pageDescription'));
    }
}
