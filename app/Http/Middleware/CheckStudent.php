<?php

namespace App\Http\Middleware;

use Closure;

class CheckStudent
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
        if(session()->has('user')) {
            if(session()->get('user')->type == 'student') {
                return $next($request);
            }
        }

        return redirect(route('home.index'));
    }
}
