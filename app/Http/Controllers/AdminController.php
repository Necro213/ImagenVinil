<?php

namespace App\Http\Controllers;

use App\Galeria;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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

    function GaleriaView(){
        return view('admin.galeria');
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


    function getImages(){
        try{
            $images = Galeria::all();


            return Datatables::of(collect($images))->make(true);
        }catch (Exception $e){
            return Response::json($e->getMessage());
        }
    }



    //--------------------------------------------Functions-----------------------------------------
    function doLogin(Request $request){
        try{
            $cookie = null;
            $us = User::where('username','ilike',$request->user)->first();
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

    function addImage(Request $request){
        try{

            $img = $request->file('input-file-preview');

            $galeria = new Galeria;

            $galeria->image = 'sn';
            $galeria->title = $request->title;
            $galeria->desc = $request->desc;
            $galeria->visible = 'false';

            $galeria->save();

            $galeria->image = 'G'.$galeria->id.'.'.$img->getClientOriginalExtension();

            $nombre = '/galeria/'.'G'.$galeria->id.'.'.$img->getClientOriginalExtension();
            Storage::disk('local')->put($nombre, \File::get($img));
            $galeria->save();

            $respuesta = ["code" => 200, "msg" => 'Imagen guardada correctamente', "message" => "success"];
        }catch (Exception $e) {
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }

    function deleteImg($id){
        try{
            $image = Galeria::where("id",'=', $id)->first();

            Storage::delete("/galeria/".$image->image);

            Galeria::destroy($id);

            $respuesta = ["code" => 200, "msg" => 'Eliminado correctamente', "message" => "success"];
        }catch (Exception $e){
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }

    function imgVisible($id){
        try{

            $image = Galeria::findOrFail($id);

            if($image->visible == 'true'){
                $image->visible = 'false';
                $mensaje = 'La imagen no se mostrara en la galeria';
            }else{
                $image->visible = 'true';
                $mensaje = 'La imagen se mostrara en la galeria';
            }

            $image->save();

            $respuesta = ["code" => 200, "msg" => $mensaje, "message" => "success"];
        }catch (Exception $e) {
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }

}
