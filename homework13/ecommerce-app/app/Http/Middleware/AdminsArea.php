<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminsArea
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // No user logged in -> go to login
        if (! Auth()->check() ) {
            return redirect()->route('auth.login')->withErrors('Please login first.');
        }

        // Normal user is logged in → go to home
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home')->withErrors('Admins area only.');
        }

        return $next($request);
    }
}
