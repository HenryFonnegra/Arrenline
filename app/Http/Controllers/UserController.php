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
        $user = User::where('id_usuario',$id_usuario)->first();
        return view('Usuario.update', compact('user'));
    }

    //actualizar datos
    //cargar datos
    public function cargar($id_usuario)
    {
        $user =  User::where('id_usuario', $id_usuario)->first();
        return view('Usuario.update', compact('user'));
    }
    //enviar nuevos datos
    public function update(Request $request){
        $updateU = [
            'PNombre'=> 'required',
            'PApellido' => 'required',
            'id' => 'required',
            'correo' => 'required',
            'contraseña' => 'required'
        ];
        $request->validate($updateU);

        $uses= User::firstwhere('id_usuario', $request->id);
        $uses->P_Nombre = $request->PNombre;
        $uses->S_Nombre = $request->SNombre;
        $uses->P_Apellido = $request->PApellido;
        $uses->S_Apellido = $request->SApellido;
        $uses->id_direccion = $request->direccion;
        $uses->Correo = $request->correo;
        $uses->Contraseña = $request->contraseña;
        $uses->save();

        return redirect('/usuario/'.$uses->id_usuario);
    }




}
