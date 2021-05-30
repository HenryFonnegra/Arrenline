<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    // caracteristicas que tiene la tabla
    protected $table = 'tbl_inmueble';
    protected $primaryKey = 'id_inmueble';
}
