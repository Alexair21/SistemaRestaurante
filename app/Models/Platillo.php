<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    protected $table = 'platillos';
    protected $fillable = [
      'nombre',
      'descripcion',
      'precio',
      'imagen',
      'categoria',
      'estado'
    ];
}
