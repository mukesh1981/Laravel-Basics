<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class globalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo "This is the global middleware";
        echo $request->middlewarecheck;
        if($request->middlewarecheck && $request->middlewarecheck<18)
        {
           return redirect('noaccess'); 
        }
        return $next($request);
    }
}
