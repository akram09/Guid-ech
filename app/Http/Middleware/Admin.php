<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *  @author Abdelwahed Madani Yousfi
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        if(auth()->user()->is_admin == 1)
        {
             return $next($request);
        }
        {
             return redirect('home')->with('error','You dont have admin access');
        }
    }
}
