<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // laravel lo tomo por defecto -- protected $table = 'categorias';
    // por defecto tambien -- protected $primaryKey = 'id'

    protected $fillable = ['nombre', 'descripcion', 'condicion'];
}
