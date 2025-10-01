<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{

    protected $fillable = [
        'proyecto_id',
        'nombre_plano',
        'descripcion',
        'version',
    ];
}
