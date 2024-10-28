<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personals';
    protected $fillable = [
      'nombre',
      'telefono',
      'direccion',
      'email',
      'fecha_nacimiento',
      'fecha_contrato',
      'salario'
    ];

}
