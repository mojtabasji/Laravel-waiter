<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoggedTable
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
        if(auth()->check() && auth()->user()->role  == 3 && auth()->user()->logged == 1 )
        {
            return $next($request);
        }
        return redirect(route('home'));
    }
}
