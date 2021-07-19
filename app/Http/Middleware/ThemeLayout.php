<?php

namespace App\Http\Middleware;

use Closure;

use Config;

class ThemeLayout
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
   public function handle($request, Closure $next)
   {
      $layout = $request->session()->get('layout');
      if (in_array($layout, Config::get('app.layouts'))) {
        $layout = $layout;
      }
      else $layout = Config::get('app.layout');

      return $next($request);
   }
 }