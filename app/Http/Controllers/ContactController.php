<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */

class ContactController extends Controller
{
    /**
     * Display a contact list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){

        $pageTitle = 'Contact List';
        $pageDescription = 'Some description for the page';

        return view('applications.contact.list', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a profile of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function profile(){

        $pageTitle = 'Contact Profile';
        $pageDescription = 'Some description for the page';

        return view('applications.contact.profile', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a contact create of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function contactCreate(){

        $pageTitle = 'Contact Create';
        $pageDescription = 'Some description for the page';

        return view('applications.contact.contact_create', compact('pageTitle', 'pageDescription'));
    }

}
