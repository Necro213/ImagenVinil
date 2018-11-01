<?php

namespace App\Http\Middleware;

use Closure;

class SesionMiddleware
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
        if($request->cookie('IEV-logged') == null){
            return redirect('/admin/login');
        }
    }
}
