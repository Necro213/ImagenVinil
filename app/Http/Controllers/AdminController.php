<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
    function LoginView(){
        return view('admin.login');
    }

    function getUsers(){
        $user = User::all();

        return Response::json($user);
    }
}
