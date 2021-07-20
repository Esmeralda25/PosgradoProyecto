<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
     * Este modelo es usado para inidcar en que programa educativo esta un docente
     * maneja la tabla adscripciones
*/
class Adscripcion extends Model
{
    public $table = "adscripciones";
    /**
     * usamos el atributo $table para identificar la tabla puesto que por convenciones
     * la tabla que el modelo buscaria se llamaria adscripcions
    */
    protected $fillable=['pes_id','docentes_id'];
    public $timestamps = false;

}
