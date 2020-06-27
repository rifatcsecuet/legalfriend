<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
     public function handle($request, Closure $next, $guard = null)
     {
         // dd(Auth::user() );
         if (Auth::guard($guard)->check()) {
             if (Auth::user()->role->id == 1) {
                 return redirect(route('admin.dashboard'));
 
             } elseif (Auth::user()->role->id == 2) {
                return redirect(route('lawyer.dashboard'));
 
             } elseif (Auth::user()->role->id == 3) {
                 return redirect(route('olp.dashboard'));
 
             } elseif (Auth::user()->role->id == 4) {
                 return redirect(route('search.lawyer'));
             }
             
         }
 
         return $next($request);
     }
}
