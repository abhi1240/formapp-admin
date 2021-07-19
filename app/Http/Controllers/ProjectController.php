<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ProjectController
 * @package App\Http\Controllers
 */

class ProjectController extends Controller
{
    /**
     * Display a project of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){

        $pageTitle = 'Projects';
        $pageDescription = 'Dashboard UI Project EARLY, Dashboard UI Project, COMPLETED Custom Software Development';

        return view('pages.project.project', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a project-table of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function projectTable(){

        $pageTitle = 'Projects Table';
        $pageDescription = 'Dashboard UI Project EARLY, Dashboard UI Project, COMPLETED Custom Software Development';

        return view('pages.project.project_table', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a details of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function details(){

        $pageTitle = 'Project Details';
        $pageDescription = 'Some description for the page';

        return view('pages.project.details', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a create of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(){

        $pageTitle = 'Create project';
        $pageDescription = 'Some description for the page';

        return view('pages.project.create', compact('pageTitle', 'pageDescription'));
    }
}
