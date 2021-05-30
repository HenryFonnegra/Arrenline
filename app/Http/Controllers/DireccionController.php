<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\Direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    public function create()
    {
        $ciudades = Ciudad::get();
        return view('Direccion.create', compact('ciudades'));
    }

    public function store(Request $request)
    {
        Direccion::created($request->all());

        return redirect()->route('Direccion.create');
    }
}
