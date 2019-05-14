<?php

namespace App\Http\Middleware;

use Closure;
use App;

class multilanguage
{
    /**
     * Handle an incoming request.
     * by abdelwahed madani yousfi
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { 
        
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        return $next($request);
    }
}
