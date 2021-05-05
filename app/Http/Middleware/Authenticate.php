<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle(Request $request, Closure $next)
    {
        if ( Auth::guard('web')->user() ) {
            return $next($request);
            session(['role' => 'data']);
        } elseif(Auth::guard('admin')->user()) {
            return $next($request);
        } elseif(Auth::guard('owner')->user()) {
            return $next($request);
        } else {
            return abort(404);
        }
    }
}
