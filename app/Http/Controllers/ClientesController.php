<?php

namespace App\Http\Controllers;

use App\Colaborador;
use App\EstacionConfig;
use App\Galeria;
use App\Gama;
use App\GnrlConfig;
use App\Producto;
use App\Promocion;
use App\User;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    public function index(){
        $hoy = date('Y-m-j');
        $estacion = $this->getEstacion();
        $productos = Producto::inRandomOrder()->paginate(3);
        $promociones = Promocion::where('desde','<=',$hoy)->where('hasta','>=',$hoy)->get();
        $colaboradores = Colaborador::all();
        $gnrl = GnrlConfig::first();
        return view('cliente.index',['hoy'=>$estacion,'products' => $productos,'promociones'=>$promociones,
            'colaboradores' => $colaboradores,'gnrl' => $gnrl]);
    }

    public function services(Request $request){

        $estacion = $this->getEstacion();
        $gnrl = GnrlConfig::first();
        if($request->sub == null) {
            $productos = Producto::where('categoria', 'ilike', $request->cat)->get();
            $productos2 = [];
            $token = 'nada';

            foreach ($productos as $producto){

                if($token == $producto->subcategoria){
                }else {
                    $token = $producto->subcategoria;
                    array_push($productos2,$producto);
                }
            }

            return view('cliente.services',['hoy'=>$estacion,'gnrl' => $gnrl,"productos" => $productos2, 'v' => '1',
                'cat'=>$request->cat]);

        }else{
            $productos = Producto::where('categoria','ilike', $request->cat)
                ->where('subcategoria','ilike', $request->sub)
                ->get();
            return view('cliente.services',['hoy'=>$estacion,'gnrl' => $gnrl,"productos" => $productos,'v'=>'0',
                'cat'=> $request->cat, 'sub' => $request->sub]);
        }
    }
    public function gama(Request $request){

        $gnrl = GnrlConfig::first();
        $estacion = $this->getEstacion();

        $gama = Gama::where('tipo', 'ilike', $request->tipo)->get();

        return view('cliente.gama',['hoy'=>$estacion,'gnrl' => $gnrl, "gama" => $gama, 'tipo' => $request->tipo]);
    }
    public function portafolio(){
        $gnrl = GnrlConfig::first();
        $estacion = $this->getEstacion();
        $galeria = Galeria::where('visible','=', 'true')->get();

        return view('cliente.portafolio',['hoy'=>$estacion,'gnrl' => $gnrl,"galeria" => $galeria]);
    }
    public function blog(){
        $gnrl = GnrlConfig::first();

        $estacion = $this->getEstacion();

        return view('cliente.blog',['hoy'=>$estacion]);
    }
    public function about(){

        $gnrl = GnrlConfig::first();
        $estacion = $this->getEstacion();
        $user = User::all();

        return view('cliente.about',['hoy'=>$estacion,'gnrl' => $gnrl, 'users' => $user]);
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
