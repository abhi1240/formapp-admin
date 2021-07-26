<?php

namespace App\Http\Controllers\form;
use App\Http\Controllers\Form\Controller;
use Illuminate\Http\Request;

class AppLinksController extends Controller
{


    public function privacy_policy()
    {
        return view('app-links.privacy-policy');
    }

    public function terms_and_conditions()
    {
        return view('app-links.terms-and-conditions');
    }

    public function refund_policy()
    {
        return view('app-links.refund-policy');
    }

    public function support()
    {
        return view('app-links.support');
    }

}
