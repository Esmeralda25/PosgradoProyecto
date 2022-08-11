<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model 
{
    public $table = "periodos";
    protected $fillable=['nombre','fechaInicio','fechaFin','estado','rubrica', 'generacion_id'];
    public $timestamps = false;

    public function pe(){
//        protected $fillable=['nombre','descripcion','pes_id'];
        return $this->hasOneThrough(
            'App\Models\Pe',
            'App\Models\Generacion',
            'id',//generaciones.id
            'id',//pes.id
            'generacion_id',//no se que hace
            'pes_id'//generaciones.pes_id
        );


    }
    public function rubricaAUsar(){
        return $this->hasOne('App\Models\Rubrica','id','rubrica');
    }
}

