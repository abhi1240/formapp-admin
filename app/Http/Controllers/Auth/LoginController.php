<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo;

    public function redirectTo()
      {
          switch(Auth::user()->rights){
            case 4:
            $this->redirectTo = '/approval';
            return $this->redirectTo;
                break;
              case 1:
              $this->redirectTo = '/admin/dashboard';
              return $this->redirectTo;
              break;

              case 0:
              $this->redirectTo = '/support/dashboard';
              return $this->redirectTo;
                  break;

              case 2:
              $this->redirectTo = '/quality_checker/dashboard';
              return $this->redirectTo;
                  break;

              case 3:
              $this->redirectTo = '/quality_controller/dashboard';
              return $this->redirectTo;
                  break;



              default:
                  $this->redirectTo = '/approval';
                  return $this->redirectTo;
          }

          }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginForm (){

        $pageTitle = 'Login';
        $pageDescription = 'Login Page';

        return view('auth.login', compact('pageTitle', 'pageDescription'));
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember_me')
        );
    }
}
