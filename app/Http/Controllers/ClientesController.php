<?php

namespace App\Http\Controllers;

use App\EstacionConfig;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    public function index(){
        $hoy = date('Y-m-j');

        $mes = date('m');
        $dia = date('j');

        if($mes < 3 || $mes > 11){
            $estacion = EstacionConfig::where('estacion', 'ilike', 'invierno')->first();
        }else{
            $estacion = EstacionConfig::where('mes', '<=', $mes)
                ->where('mesf', '>', $mes)
                //-> where('dia','<=', $dia)
                //-> where('diaf','>=', $dia)
                ->first();
        }

        return view('cliente.index',['hoy'=>$estacion]);
    }

    public function services(){
        return view('cliente.services');
    }
    public function elements(){
        return view('cliente.elements');
    }
    public function contact(){
        return view('cliente.contact');
    }
    public function blog(){
        return view('cliente.blog');
    }
    public function about(){
        return view('cliente.about');
    }

}
