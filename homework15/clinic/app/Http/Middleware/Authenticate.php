<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //  if no any user logged in
        if
        (
            // $request->headers->all()['referer'][0] !== "http://127.0.0.1:8000/auth/login" &&
            $request->is('admin/*') && !auth()->guard('admin')->check()
            || !$request->is('admin/*') && !auth()->guard('web')->check()
        ) {
            return redirect(route('auth.login'));
        }

        //  else continue browsing
        return $next($request);
    }
}
