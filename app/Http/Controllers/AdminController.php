<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function LoginView(){
        return view('admin.login');
    }

    function doLogin(Request $request){
        try{
            $cookie = null;
            $us = User::where('username','=',$request->user)->first();
            if ($us != null) {
                if (Hash::check($request->pass, $us->password)) {
                    $datos = ['apikey' => $us->apikey];
                    $cookie = Cookie::make('IEV-logged',$us->apikey,180);
                    $respuesta = ["code" => 200, "msg" => $us->nombre];
                    return Response::json($respuesta)->withCookie($cookie);
                } else {
                    $respuesta = ["code" => 404, "msg" => "usuario o contraseña incorrectos"];
                }
            } else {
                $respuesta = ["code" => 404, "msg" => "usuario o contraseña incorrectos"];
            }
        } catch (Exception $e) {
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }
        return Response::json($respuesta);
    }

    function getUsers(){

        $user = User::all();

        return Response::json($user);
    }
}
