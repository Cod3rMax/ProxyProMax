<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersConfirmationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {



        if(!Auth::check())
        {
            return redirect(Route('MainPage'));
        }


        else if(Auth::check() && Auth::user()->UserConfirmation->confirmed)
        {
            return redirect(Route('MainPage'));
        }

        return $next($request);
    }
}
