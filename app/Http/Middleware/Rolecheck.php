<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Rolecheck
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
        if (auth()->check() && auth()->user()->role  < 3 && auth()->user()->status == 1) {
            return $next($request);
        }

        return redirect(route('home'));
    }
}
