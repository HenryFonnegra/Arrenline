<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inmueble;

class InmuebleController extends Controller
{
    //
    public function index(){

        $inmuebles = Inmueble::get(); //esta variable
        //     direccion vista       variable
        return view('Inmueble.create', compact('inmuebles'));
    }


    //enviar nuevos datos
    public function create(Request $request){
        $create = [
            'PNombre'=> 'required',
            'PApellido' => 'required',
            'id' => 'required',
            'correo' => 'required',
            'contraseña' => 'required'
        ];

        $inmueble= Inmueble::get();
        $inmueble->Tipo_inmueble = $request->Tipo_inmueble;
        $inmueble->nombre_inmueble = $request->nombre_inmueble;
        $inmueble->dimensiones = $request->dimensiones;
        $inmueble->precio = $request->precio;
        $inmueble->id_direccion = $request->id_direccion;
        $inmueble->Servicios = $request->Servicios;
        $inmueble->tipo_precio = $request->tipo_precio;
        $inmueble->Descripcion = $request->Descripcion;
        $inmueble->reservable = $request->reservable;
        $inmueble->Uso_inmueble = $request->Uso_inmueble;
        $inmueble->save();

        return redirect('/');
    }
}
