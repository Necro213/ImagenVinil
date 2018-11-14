<?php

namespace App\Http\Controllers;

use App\EstacionConfig;
use App\Producto;
use App\Promocion;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    public function index(){

        $estacion = $this->getEstacion();
        $productos = Producto::inRandomOrder()->paginate(3);
        $promociones = Promocion::all();

        return view('cliente.index',['hoy'=>$estacion,'products' => $productos,'promociones'=>$promociones]);
    }

    public function services(){

        $estacion = $this->getEstacion();

        return view('cliente.services',['hoy'=>$estacion]);
    }
    public function elements(){

        $estacion = $this->getEstacion();

        return view('cliente.elements',['hoy'=>$estacion]);
    }
    public function contact(){

        $estacion = $this->getEstacion();

        return view('cliente.contact',['hoy'=>$estacion]);
    }
    public function blog(){

        $estacion = $this->getEstacion();

        return view('cliente.blog',['hoy'=>$estacion]);
    }
    public function about(){

        $estacion = $this->getEstacion();

        return view('cliente.about',['hoy'=>$estacion]);
    }

    private function getEstacion(){
        $mes = date('m');

        if($mes < 3 || $mes > 11){
            $estacion = EstacionConfig::where('estacion', 'ilike', 'invierno')->first();
        }else{
            $estacion = EstacionConfig::where('mes', '<=', $mes)
                ->where('mesf', '>', $mes)
                //-> where('dia','<=', $dia)
                //-> where('diaf','>=', $dia)
                ->first();
        }
        return $estacion;
    }
}
