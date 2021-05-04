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
        return view('casa', compact('inmuebles'));
    }
}
