<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
         if(Auth::check() && Auth::user()->role->id == 1)   //To determine if the user is already logged into your application
         {
             return $next($request);
         }
         else {
              return redirect()->route('login');
         }
 
     }
}
