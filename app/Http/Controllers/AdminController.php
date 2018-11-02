<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;

class AdminController extends Controller
{
    //---------------------------------------------Views-------------------------------------------
    function LoginView(Request $request){
        
        if($request->cookie('IEV-logged') != null){
            return redirect('/admin');
        }
        
        return view('admin.login');
    }

    function IndexView(Request $request){
        return view('admin.index');
    }

    function UsersView(){
        return view('admin.users');
    }
    //----------------------------------------------Data--------------------------------------------

    function getUsers(){
        try{
            $users = User::all();


            return Datatables::of(collect($users))->make(true);
        }catch (Exception $e){
            return Response::json($e->getMessage());
        }
    }

    //--------------------------------------------Functions-----------------------------------------
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

    function regUser(Request $request){
        try{
            $user = new User;

            $user->nombre = $request->nombre;
            $user->apellidos = $request->apellidos;
            $user->username = $request->username;
            $user->password = bcrypt($request->pass);
            $user->apikey = bcrypt($user->id);

            $user->save();

            $respuesta = ["code" => 200, "msg" => 'registrado correctamente', "message" => "success"];
        }catch (Exception $e) {
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }

    function deleteUser(Request $request, $apikey){
        try{
            User::where("apikey",'=', $apikey)->delete();

            $respuesta = ["code" => 200, "msg" => 'Eliminado correctamente', "message" => "success"];
        }catch (Exception $e){
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }
}
