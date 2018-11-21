<?php

namespace App\Http\Controllers;

use App\Colaborador;
use App\EstacionConfig;
use App\Galeria;
use App\GnrlConfig;
use App\Producto;
use App\Promocion;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    public function index(){

        $estacion = $this->getEstacion();
        $productos = Producto::inRandomOrder()->paginate(3);
        $promociones = Promocion::all();
        $colaboradores = Colaborador::all();
        $gnrl = GnrlConfig::first();
        return view('cliente.index',['hoy'=>$estacion,'products' => $productos,'promociones'=>$promociones,
            'colaboradores' => $colaboradores,'gnrl' => $gnrl]);
    }

    public function services(){

        $estacion = $this->getEstacion();
        $gnrl = GnrlConfig::first();
        $productos = Producto::all();

        return view('cliente.services',['hoy'=>$estacion,'gnrl' => $gnrl,"productos" => $productos]);
    }
    public function elements(){

        $estacion = $this->getEstacion();

        return view('cliente.elements',['hoy'=>$estacion]);
    }
    public function portafolio(){
        $gnrl = GnrlConfig::first();
        $estacion = $this->getEstacion();
        $galeria = Galeria::where('visible','=', 'true')->get();

        return view('cliente.portafolio',['hoy'=>$estacion,'gnrl' => $gnrl,"galeria" => $galeria]);
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
