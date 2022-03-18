<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\support\facades\Auth;
class middlewareadmin
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
        /*if(auth()->user()&& auth()->user()->role==0)
        {
        return $next($request);
      // return $next()
        }
        else
        {
           abort(404);
        }*/

        if(Auth::user()->role== '1')
        {
        return $next($request);
    
        }
        else
        {
           return redirect('/login ');//////////////////
        }

    
}}

