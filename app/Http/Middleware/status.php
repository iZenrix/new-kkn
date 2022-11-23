<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $status)
    {
        if($request->user()->status == $status){
            return $next($request);
        }else{
            return redirect('/login');
        }
    }
}
