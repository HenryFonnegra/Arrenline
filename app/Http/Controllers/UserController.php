<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::get();
        return view('Usuario.index', compact('users'));
    }

    public function show($id_usuario)
    {
        $user=User::where('id_usuario',$id_usuario)->first();
        return view('Usuario.show', compact('user'));
    }
}
