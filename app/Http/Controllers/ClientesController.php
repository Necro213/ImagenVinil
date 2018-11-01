<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    public function index(){
        return view('cliente.index');
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
