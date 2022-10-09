<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedUsersMiddleware
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

        //if user logged in && user is confirmed redirect to MainPage
        // if user logged in && user not confirmed redirect to verification page

        if(Auth::check() && Auth::user()->UserConfirmation->confirmed)
        {
            return redirect(Route('MainPage'));
        }
        else if(Auth::check() && !Auth::user()->UserConfirmation->confirmed){
            return redirect(Route('UserConfirmation'));
        }
        return $next($request);
    }
}
