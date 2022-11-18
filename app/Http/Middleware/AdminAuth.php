<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use \Illuminate\Support\Str;
use Closure;
use Illuminate\Http\Request;

class AdminAuth
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

        if (auth()->user()->is_admin == 1 && str::contains($request->url(), 'admin' == true)) {

            return $next($request);
        } else if (auth()->user()->is_admin == 1 && str::contains($request->url(), 'admin' == false)) {
            return $next($request);
        } else if (auth()->user()->is_admin == 0 && str::contains($request->url(), 'admin' == true)) {
            return $next($request);
        } else {


            return $next($request);
        }
    }
}
