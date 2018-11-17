<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class RedirectPartners
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
        if(Auth::check() && Auth::user()->user_type == "partner"){
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
