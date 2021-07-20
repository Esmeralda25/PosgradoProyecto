<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* El modelo representa al comite tutorial, son los docenter que dirigen el rumbo
* del proyecto, exite un asesor que inidcara al estudiante las cosas a realizar
* y existen tres revisroes que daran calificacion y observaciones al proyecto.
*/

class Comite extends Model
{
     /**
     * dice que campos se llenaran
     */
    protected $fillable=[ 'asesor', 'revisor1', 'revisor2', 'revisor3'];
    /**
     * establece si uso update at y created at
     */

    public $timestamps = false;

    /**
     * Este metodo es para mostrare la relacion que existe entre un comite y un docente
     * puesto que el asesor esta en un comite y la tabla de comite tiene un campo que se 
     * llama asesor y este nos indica quien es el docente asesor
     * @return u Un objeto docente ('App\Models\Docente')
     */
    public function docenteAsesor(){
        return $this->hasOne('App\Models\Docente','id','asesor');

 
    }
 
}
