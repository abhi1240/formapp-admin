<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ChatController
 * @package App\Http\Controllers
 */

class ChatController extends Controller
{
    /**
     * Display a chat of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  index(){

        $pageTitle = 'Chat';
        $pageDescription = 'Chat';

        return view('applications.chat', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a note of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  note(){

        $pageTitle = 'Note';
        $pageDescription = 'lorem note extra';

        return view('applications.note', compact('pageTitle', 'pageDescription'));
    }
}
