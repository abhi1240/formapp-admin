<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class FormController
 * @package App\Http\Controllers
 */

class FormController extends Controller
{
    /**
     * Display a form basic of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){

        $pageTitle = 'Form';
        $pageDescription = 'Some description for the page';

        return view('forms.basic', compact('pageTitle', 'pageDescription'));
    }
    /**
     * Display a form layouts of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function layouts(){

        $pageTitle = 'Form layouts';
        $pageDescription = 'Some description for the page';

        return view('forms.layouts', compact('pageTitle', 'pageDescription'));
    }
    /**
     * Display a form elements of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function elements(){

        $pageTitle = 'Form elements';
        $pageDescription = 'Some description for the page';

        return view('forms.elements', compact('pageTitle', 'pageDescription'));
    }
    /**
     * Display a form components of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function components(){

        $pageTitle = 'Form components';
        $pageDescription = 'Some description for the page';

        return view('forms.components', compact('pageTitle', 'pageDescription'));
    }
    /**
     * Display a form validations of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function validations(){

        $pageTitle = 'Form';
        $pageDescription = 'Some description for the page';

        return view('forms.validations', compact('pageTitle', 'pageDescription'));
    }

}
