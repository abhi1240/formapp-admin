<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use auth;

class QualityController
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle(Request $request, Closure $next)
     {
         if(isset(auth()->user()->rights)){
            if(auth()->user()->rights == 3) {
             return $next($request);
       }else {
         return redirect('/login');
       }
         }else{

             return redirect('/login');
         }



     }
}
