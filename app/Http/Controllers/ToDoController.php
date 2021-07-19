<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ToDoController
 * @package App\Http\Controllers
 */

class ToDoController extends Controller
{

    /**
     * Display a todo of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index() {
        $pageTitle = 'To-Do';
        $pageDescription = 'Some description for the page';

        return view('applications.todo', compact('pageTitle', 'pageDescription'));
    }
}
