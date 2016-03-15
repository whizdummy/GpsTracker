<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticatedUsers
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
        if($request->session()->has('adminId')) {
            return $next($request);    
        } 
        
        return redirect('/');
    }
}
