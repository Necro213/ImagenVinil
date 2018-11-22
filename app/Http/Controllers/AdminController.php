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
use App\Venta;
use App\Visita;
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
        $cookie = $request->cookie('IEV-logged');

        $user = User::where('apikey','=',$cookie)->first();

        $productos = Producto::all()->count();

        $visitas = Visita::all();

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

        $total = 0;
        foreach ($visitas as $visita){
            $total = $total+$visita->contador;
        }

        return view('admin.index',['nombre'=>$user->nombre,'productos' => $productos,'visitas' => $total, 'estacion' => $estacion]);
    }

    function UsersView(Request $request){
        $cookie = $request->cookie('IEV-logged');

        $user = User::where('apikey','=',$cookie)->first();
        return view('admin.users',['nombre'=>$user->nombre]);
    }

    function GaleriaView(Request $request){

        $cookie = $request->cookie('IEV-logged');

        $user = User::where('apikey','=',$cookie)->first();

        return view('admin.galeria',['nombre'=>$user->nombre]);
    }

    function GamaView(Request $request){

        $cookie = $request->cookie('IEV-logged');

        $user = User::where('apikey','=',$cookie)->first();

        return view('admin.gama',['nombre'=>$user->nombre]);
    }

    function ProductosView(Request $request){

        $cookie = $request->cookie('IEV-logged');

        $user = User::where('apikey','=',$cookie)->first();

        return view('admin.productos',['nombre'=>$user->nombre]);
    }

    function PromocionesView(Request $request){

        $cookie = $request->cookie('IEV-logged');

        $user = User::where('apikey','=',$cookie)->first();

        return view('admin.promociones',['nombre'=>$user->nombre]);
    }

    function EstacionesView(Request $request){

        $cookie = $request->cookie('IEV-logged');

        $user = User::where('apikey','=',$cookie)->first();

        $estaciones = EstacionConfig::all();

        return view('admin.estaciones',['nombre'=>$user->nombre,'estaciones' => $estaciones]);
    }

    function ColaboradoresView(Request $request){

        $cookie = $request->cookie('IEV-logged');

        $user = User::where('apikey','=',$cookie)->first();

        return view('admin.colaboradores',['nombre'=>$user->nombre]);
    }

    function GeneralView(Request $request){

        $cookie = $request->cookie('IEV-logged');

        $user = User::where('apikey','=',$cookie)->first();

        $gnrl = GnrlConfig::first();

        return view('admin.general',['nombre'=>$user->nombre,'gnrl' => $gnrl]);
    }

    function VentasView(Request $request){

        $cookie = $request->cookie('IEV-logged');

        $user = User::where('apikey','=',$cookie)->first();
        $productos = Producto::all();

        return view('admin.ventas',['nombre'=>$user->nombre,'products' => $productos]);
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

    function getGama(){
        try{
            $gama = Gama::all();
            return Datatables::of(collect($gama))->make(true);
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

    function getColaboradores(){
        try{
            $colaboradores = Colaborador::all();


            return Datatables::of(collect($colaboradores))->make(true);
        }catch (Exception $e){
            return Response::json($e->getMessage());
        }
    }

    function getProducts(){
        try{
            $products = Producto::all();


            return Datatables::of(collect($products))->make(true);
        }catch (Exception $e){
            return Response::json($e->getMessage());
        }
    }

    function getPromotions(){
        try{
            $promotions = Promocion::all();


            return Datatables::of(collect($promotions))->make(true);
        }catch (Exception $e){
            return Response::json($e->getMessage());
        }
    }

    function getVisitors(){
        try{
            $promotions = Promocion::all();

            $año = date('Y');

            $dia1 = date('Y-m-j',strtotime($año.'-01-01'));
            $dia2 = date('Y-m-j',strtotime($año.'-12-31'));
            $dia1a = date('Y-m-j',strtotime(($año-1).'-01-01'));
            $dia2a = date('Y-m-j',strtotime(($año-1).'-12-31'));

            $visitas = Visita::where('fecha', '>', $dia1)
                ->where('fecha','<', $dia2)
                ->get();

            $visitasA = Visita::where('fecha', '>', $dia1a)
                ->where('fecha','<', $dia2a)
                ->get();

            $enero = 0;
            $febrero = 0;
            $marzo = 0;
            $abril = 0;
            $mayo = 0;
            $junio = 0;
            $julio = 0;
            $agosto = 0;
            $septiembre = 0;
            $octubre = 0;
            $noviembre = 0;
            $diciembre = 0;

            $visitas1 = [];
            foreach ($visitas as $visita){
                $mes = date('m',strtotime($visita->fecha));
                switch ($mes){
                    case 1: $enero+=$visita->contador;
                        break;
                    case 2: $febrero+=$visita->contador;
                        break;
                    case 3: $marzo+=$visita->contador;
                        break;
                    case 4: $abril+=$visita->contador;
                        break;
                    case 5: $mayo+=$visita->contador;
                        break;
                    case 6: $junio+=$visita->contador;
                        break;
                    case 7: $julio+=$visita->contador;
                        break;
                    case 8: $agosto+=$visita->contador;
                        break;
                    case 9: $septiembre+=$visita->contador;
                        break;
                    case 10: $octubre+=$visita->contador;
                        break;
                    case 11: $noviembre+=$visita->contador;
                        break;
                    case 12: $diciembre+=$visita->contador;
                        break;
                }
            }

            array_push($visitas1,$enero);
            array_push($visitas1,$febrero);
            array_push($visitas1,$marzo);
            array_push($visitas1,$abril);
            array_push($visitas1,$mayo);
            array_push($visitas1,$junio);
            array_push($visitas1,$julio);
            array_push($visitas1,$agosto);
            array_push($visitas1,$septiembre);
            array_push($visitas1,$octubre);
            array_push($visitas1,$noviembre);
            array_push($visitas1,$diciembre);

            $enero = 0;
            $febrero = 0;
            $marzo = 0;
            $abril = 0;
            $mayo = 0;
            $junio = 0;
            $julio = 0;
            $agosto = 0;
            $septiembre = 0;
            $octubre = 0;
            $noviembre = 0;
            $diciembre = 0;

            $visitas2 = [];
            foreach ($visitasA as $visita){
                $mes = date('m',strtotime($visita->fecha));
                switch ($mes){
                    case 1: $enero+=$visita->contador;
                        break;
                    case 2: $febrero+=$visita->contador;
                        break;
                    case 3: $marzo+=$visita->contador;
                        break;
                    case 4: $abril+=$visita->contador;
                        break;
                    case 5: $mayo+=$visita->contador;
                        break;
                    case 6: $junio+=$visita->contador;
                        break;
                    case 7: $julio+=$visita->contador;
                        break;
                    case 8: $agosto+=$visita->contador;
                        break;
                    case 9: $septiembre+=$visita->contador;
                        break;
                    case 10: $octubre+=$visita->contador;
                        break;
                    case 11: $noviembre+=$visita->contador;
                        break;
                    case 12: $diciembre+=$visita->contador;
                        break;
                }
            }

            array_push($visitas2,$enero);
            array_push($visitas2,$febrero);
            array_push($visitas2,$marzo);
            array_push($visitas2,$abril);
            array_push($visitas2,$mayo);
            array_push($visitas2,$junio);
            array_push($visitas2,$julio);
            array_push($visitas2,$agosto);
            array_push($visitas2,$septiembre);
            array_push($visitas2,$octubre);
            array_push($visitas2,$noviembre);
            array_push($visitas2,$diciembre);

            return Response::json(['code' => 200, 'v1' => $visitas1, 'v2' => $visitas2]);
        }catch (Exception $e){
            return Response::json($e->getMessage());
        }
    }
    
    
    function getVentas($id){
        try{
            $promotions = Promocion::all();

            $año = date('Y');

            $dia1 = date('Y-m-j',strtotime($año.'-01-01'));
            $dia2 = date('Y-m-j',strtotime($año.'-12-31'));
            $dia1a = date('Y-m-j',strtotime(($año-1).'-01-01'));
            $dia2a = date('Y-m-j',strtotime(($año-1).'-12-31'));

            $ventas = Venta::where('fecha', '>', $dia1)
                ->where('fecha','<', $dia2)
                ->where('idProducto', '=', $id)
                ->get();
            $ventasA = Venta::where('fecha', '>', $dia1a)
                ->where('fecha','<', $dia2a)
                ->where('idProducto', '=', $id)
                ->get();

            $enero = 0;
            $febrero = 0;
            $marzo = 0;
            $abril = 0;
            $mayo = 0;
            $junio = 0;
            $julio = 0;
            $agosto = 0;
            $septiembre = 0;
            $octubre = 0;
            $noviembre = 0;
            $diciembre = 0;

            $ventas1 = [];
            foreach ($ventas as $venta){
                $mes = date('m',strtotime($venta->fecha));
                switch ($mes){
                    case 1: $enero+=$venta->contador;
                        break;
                    case 2: $febrero+=$venta->contador;
                        break;
                    case 3: $marzo+=$venta->contador;
                        break;
                    case 4: $abril+=$venta->contador;
                        break;
                    case 5: $mayo+=$venta->contador;
                        break;
                    case 6: $junio+=$venta->contador;
                        break;
                    case 7: $julio+=$venta->contador;
                        break;
                    case 8: $agosto+=$venta->contador;
                        break;
                    case 9: $septiembre+=$venta->contador;
                        break;
                    case 10: $octubre+=$venta->contador;
                        break;
                    case 11: $noviembre+=$venta->contador;
                        break;
                    case 12: $diciembre+=$venta->contador;
                        break;
                }
            }
            array_push($ventas1,$enero);
            array_push($ventas1,$febrero);
            array_push($ventas1,$marzo);
            array_push($ventas1,$abril);
            array_push($ventas1,$mayo);
            array_push($ventas1,$junio);
            array_push($ventas1,$julio);
            array_push($ventas1,$agosto);
            array_push($ventas1,$septiembre);
            array_push($ventas1,$octubre);
            array_push($ventas1,$noviembre);
            array_push($ventas1,$diciembre);

            $enero = 0;
            $febrero = 0;
            $marzo = 0;
            $abril = 0;
            $mayo = 0;
            $junio = 0;
            $julio = 0;
            $agosto = 0;
            $septiembre = 0;
            $octubre = 0;
            $noviembre = 0;
            $diciembre = 0;

            $ventas2 = [];
            foreach ($ventasA as $visita){
                $mes = date('m',strtotime($visita->fecha));
                switch ($mes){
                    case 1: $enero+=$visita->contador;
                        break;
                    case 2: $febrero+=$visita->contador;
                        break;
                    case 3: $marzo+=$visita->contador;
                        break;
                    case 4: $abril+=$visita->contador;
                        break;
                    case 5: $mayo+=$visita->contador;
                        break;
                    case 6: $junio+=$visita->contador;
                        break;
                    case 7: $julio+=$visita->contador;
                        break;
                    case 8: $agosto+=$visita->contador;
                        break;
                    case 9: $septiembre+=$visita->contador;
                        break;
                    case 10: $octubre+=$visita->contador;
                        break;
                    case 11: $noviembre+=$visita->contador;
                        break;
                    case 12: $diciembre+=$visita->contador;
                        break;
                }
            }

            array_push($ventas2,$enero);
            array_push($ventas2,$febrero);
            array_push($ventas2,$marzo);
            array_push($ventas2,$abril);
            array_push($ventas2,$mayo);
            array_push($ventas2,$junio);
            array_push($ventas2,$julio);
            array_push($ventas2,$agosto);
            array_push($ventas2,$septiembre);
            array_push($ventas2,$octubre);
            array_push($ventas2,$noviembre);
            array_push($ventas2,$diciembre);
            return Response::json(['code' => 200, 'v1' => $ventas1, 'v2' => $ventas2]);
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

            $user->save();

            $user->apikey = bcrypt($user->id);
            $user->save();

            $respuesta = ["code" => 200, "msg" => 'registrado correctamente', "message" => "success"];
        }catch (Exception $e) {
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }

    function regVenta(Request $request){
        try{
            $hoy = date('Y-m-j');

            $venta = Venta::where('fecha','=',$hoy)
                ->where('idProducto','=', $request->venta)
                ->first();

            if($venta == null){
                $venta = new Venta;
                $venta->fecha = $hoy;
                $venta->idProducto = $request->venta;
                $venta->contador = $request->cantidad;
            }else{
                $venta->contador = $venta->contador+$request->cantidad;
            }

            $venta->save();

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

    function addGama(Request $request){
        try{

            $img = $request->file('input-file-preview');

            $gama = new Gama();

            $gama->image = 'sn';
            $gama->nombre = $request->name;
            $gama->tipo = $request->tipo;

            $gama->save();

            $gama->image = 'G'.$gama->id.'.'.$img->getClientOriginalExtension();

            $nombre = '/gama/'.'G'.$gama->id.'.'.$img->getClientOriginalExtension();
            Storage::disk('local')->put($nombre, \File::get($img));
            $gama->save();

            $respuesta = ["code" => 200, "msg" => 'Gama guardada correctamente', "message" => "success"];
        }catch (Exception $e) {
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }

    function addColaborador(Request $request){
        try{

            $img = $request->file('input-file-preview');

            $colaborador = new Colaborador;

            $colaborador->image = 'sn';
            $colaborador->sitio = $request->sitio;
            $colaborador->nombre = $request->name;

            $colaborador->save();

            $colaborador->image = 'C'.$colaborador->id.'.'.$img->getClientOriginalExtension();

            $nombre = '/colaboradores/'.'C'.$colaborador->id.'.'.$img->getClientOriginalExtension();
            Storage::disk('local')->put($nombre, \File::get($img));
            $colaborador->save();

            $respuesta = ["code" => 200, "msg" => 'Cliente guardado correctamente', "message" => "success"];
        }catch (Exception $e) {
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }

    function addProduct(Request $request){
        try{

            $img = $request->file('input-file-preview');

            $producto = new Producto;

            $producto->image = 'sn';
            $producto->nombre = $request->product;
            $producto->desc = $request->desc;
            $producto->categoria = $request->cat;
            $producto->subcategoria = $request->scat;

            $producto->save();

            $producto->image = 'P'.$producto->id.'.'.$img->getClientOriginalExtension();

            $nombre = '/productos/'.'P'.$producto->id.'.'.$img->getClientOriginalExtension();
            Storage::disk('local')->put($nombre, \File::get($img));
            $producto->save();

            $respuesta = ["code" => 200, "msg" => 'Producto guardado correctamente', "message" => "success"];
        }catch (Exception $e) {
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }

    function generalConfig(Request $request){
        try{
            $img = $request->file('input-file-preview');

            if($img != null){
                $nombre = '/system/gama.jpg';
                Storage::disk('local')->put($nombre, \File::get($img));
            }

            $gnrl = GnrlConfig::first();

            if ($gnrl == null){
                $gnrl = new GnrlConfig;
            }

            $gnrl->mision = $request->mision;
            $gnrl->vision = $request->vision;
            $gnrl->telefono = $request->telefono;
            $gnrl->direccion = $request->direccion;
            $gnrl->email = $request->email;
            $gnrl->facebook = $request->face;
            $gnrl->twitter = $request->tw;
            $gnrl->eslogan = $request->eslogan;

            $gnrl->save();

            $respuesta = ["code" => 200, "msg" => 'Guardado correctamente', "message" => "success"];
        }catch (Exception $e) {
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }

    function addPromo(Request $request){
        try{

            $img = $request->file('input-file-preview');

            $hasta = date('Y-m-j',strtotime($request->desde.'+ '.$request->dias.' days'));

            $promo = new Promocion();

            $promo->image = 'sn';
            $promo->title = $request->title;
            $promo->desc = $request->desc;
            $promo->desde = $request->desde;
            $promo->hasta = $hasta;

            $promo->save();

            $promo->image = 'PR'.$promo->id.'.'.$img->getClientOriginalExtension();

            $nombre = '/promociones/'.'PR'.$promo->id.'.'.$img->getClientOriginalExtension();
            Storage::disk('local')->put($nombre, \File::get($img));
            $promo->save();

            $respuesta = ["code" => 200, "msg" => 'Promocion creada correctamente', "message" => "success"];
        }catch (Exception $e) {
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }

    function editEstaciones(Request $request){
        try{

            $primavera = $request->file('Primavera');
            $verano = $request->file('Verano');
            $otono = $request->file('Otono');
            $invierno = $request->file('Invierno');

            if($primavera != null){
                Storage::disk('local')->put('/system/primavera.'.$primavera->getClientOriginalExtension(), \File::get($primavera));
                $p = EstacionConfig::where('estacion','ilike','Primavera')->first();
                $p->image = 'primavera.'.$primavera->getClientOriginalExtension();
                $p->save();
            }

            if ($verano != null){
                Storage::disk('local')->put('/system/verano.'.$verano->getClientOriginalExtension(), \File::get($verano));
                $v = EstacionConfig::where('estacion','ilike','Verano')->first();
                $v->image = 'verano.'.$primavera->getClientOriginalExtension();
                $v->save();
            }
            if ($otono != null){
                Storage::disk('local')->put('/system/otono.'.$otono->getClientOriginalExtension(), \File::get($otono));
                $o = EstacionConfig::where('estacion','ilike','Otono')->first();
                $o->image = 'otono.'.$primavera->getClientOriginalExtension();
                $o->save();
            }
            if ($invierno != null){
                Storage::disk('local')->put('/system/invierno.'.$invierno->getClientOriginalExtension(), \File::get($invierno));
                $i = EstacionConfig::where('estacion','ilike','Invierno')->first();
                $i->image = 'invierno.'.$primavera->getClientOriginalExtension();
                $i->save();
            }

            $respuesta = ["code" => 200, "msg" => 'Imagenes actualizadas correctamente', "message" => "success"];
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

    function deleteColaborador($id){
        try{
            $image = Colaborador::where("id",'=', $id)->first();

            Storage::delete("/colaborador/".$image->image);

            Colaborador::destroy($id);

            $respuesta = ["code" => 200, "msg" => 'Eliminado correctamente', "message" => "success"];
        }catch (Exception $e){
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }

    function deleteProduct($id){
        try{
            $image = Producto::where("id",'=', $id)->first();

            Storage::delete("/productos/".$image->image);

            Producto::destroy($id);

            $respuesta = ["code" => 200, "msg" => 'Eliminado correctamente', "message" => "success"];
        }catch (Exception $e){
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }

    function deletePromotion($id){
        try{
            $image = Promocion::where("id",'=', $id)->first();

            Storage::delete("/promociones/".$image->image);

            Promocion::destroy($id);

            $respuesta = ["code" => 200, "msg" => 'Eliminado correctamente', "message" => "success"];
        }catch (Exception $e){
            $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
        }

        return Response::json($respuesta);
    }
    
    function deleteGama($id){
        try{
            $image = Gama::where("id",'=', $id)->first();

            Storage::delete("/gama/".$image->image);

            Promocion::destroy($id);

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
