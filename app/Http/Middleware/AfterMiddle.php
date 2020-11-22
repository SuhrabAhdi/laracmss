<?php

namespace App\Http\Middleware;

use Closure;

class AfterMiddle
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
       $response =  $next($request);
       echo "After executing the route <br>";
        return $response;
    }
}
