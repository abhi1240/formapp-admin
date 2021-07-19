<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class IconController
 * @package App\Http\Controllers
 */

class ImportExportController extends Controller
{
    /**
     * Display a import of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){

        $pageTitle = 'Import';
        $pageDescription = 'Some description for the page';

        return view('applications.import-export.import', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a export of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function export(){

        $pageTitle = 'Feather Icons';
        $pageDescription = 'Some description for the page';

        return view('applications.import-export.export', compact('pageTitle', 'pageDescription'));
    }
}
