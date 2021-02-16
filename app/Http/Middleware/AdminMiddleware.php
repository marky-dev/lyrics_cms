<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::user()->usertype == 'ADM')
        {
            return $next($request);
        }
        else
        {
            return redirect('/login')->with('status',"You are not allowed to view the admin dashboard");
        }
        
    }
}
