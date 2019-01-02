<?php

namespace App\Http\Middleware;

use Closure;

class JWTCheckIfAuthenticated
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
        if(auth('jwt')->check()) {
            return $next($request);
        }
        
        return response()->json(['addas']);
    }
}
