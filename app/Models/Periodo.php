<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model 
{
    public $table = "periodos";
    protected $fillable=['nombre','fechaInicio','fechaFin','estado','rubrica', 'generacion_id'];
    public $timestamps = false;

    public function generacion(){
        return $this->belongsTo('App\Models\Generacion');
    }
    public function pe(){
//        protected $fillable=['nombre','descripcion','pes_id'];
        return $this->hasOneThrough(
            'App\Models\Pe',
            'App\Models\Generacion',
            'id',//generaciones.id
            'id',//pes.id
            'generacion_id',//no se que hace
            'pe_id'//generaciones.pe_id
        );
    }
    public function rubrica(){
        //hasOne si rubircas tiene un periodo_id que sea ? donde ? es el id actual
        //belognsTo si `rubricas`.`id` = ? donde ? es el rubrica_id
        return $this->belongsTo('App\Models\Rubrica');
    } 
    public function estudiantes(){
       return $this->hasMany('App\Models\Estudiante');
    }
    public function inscritos(){
        return $this->hasMany('App\Models\Estudiante')->count();
     }
 
}

