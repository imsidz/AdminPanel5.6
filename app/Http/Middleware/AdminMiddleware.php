<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
         if (!Auth::guest() && Auth::user()->admin) {
            
            return $next($request);
        }
        return redirect('login')->with('status', 'Please Login As Admin');
    }
}
