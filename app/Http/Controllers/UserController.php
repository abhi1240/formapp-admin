<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Http\Controllers
 */

class UserController extends Controller
{
    /**
     * Display a team of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  index(){

        $pageTitle = 'Team';
        $pageDescription = 'Some description for the page';

        return view('users.team', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a users of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  users(){

        $pageTitle = 'Users';
        $pageDescription = 'Some description for the page';

        return view('users.users', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a users grid of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  usersGrid(){

        $pageTitle = 'Users Grid';
        $pageDescription = 'Some description for the page';

        return view('users.users_grid', compact('pageTitle', 'pageDescription'));
    }
    
    /**
     * Display a users grid of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  addUser(){

        $pageTitle = 'Add User';
        $pageDescription = 'Some description for the page';

        return view('users.add_user', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a users list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  usersList(){

        $pageTitle = 'Users List';
        $pageDescription = 'Some description for the page';

        return view('users.users_list', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a users group of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  usersGroup(){

        $pageTitle = 'Users Group';
        $pageDescription = 'Some description for the page';

        return view('users.users_group', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a users datatable of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  usersDatatable(){

        $pageTitle = 'Users data table';
        $pageDescription = 'Some description for the page';

        return view('users.users_datatable', compact('pageTitle', 'pageDescription'));
    }
}
