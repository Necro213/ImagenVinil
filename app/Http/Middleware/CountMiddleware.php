<?php

namespace App\Http\Middleware;

use App\Visita;
use Closure;
use Illuminate\Support\Facades\Cookie;

class CountMiddleware
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
        if($request->cookie('visita') != null){
            return $next($request);
        }else{
            $datos = ['apikey' => bcrypt('true')];
            $cookie = Cookie::make('visita',bcrypt('true'),180);

            Cookie::queue($cookie);
            date_default_timezone_set("America/Mexico_City");
            $hoy = date("Y-m-j");
            $visita = Visita::where('fecha', '=', $hoy)->first();

            if($visita == null){
                $v = new Visita;

                $v->fecha = $hoy;
                $v->contador = 1;

                $v->save;
            }else{
                $visita->contador = $visita->contador+1;

                $visita->save();
            }

            return $next($request);
        }
    }
}
