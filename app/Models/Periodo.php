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
        return $this->belongsTo('App\Models\Rubrica')
        ->withDefault(
            [
                'id'=>0,
                'nombre' => 'Sin asignar'
            ]
        );
    } 
    public function estudiantes(){
       return $this->hasMany('App\Models\Estudiante');
    }
    public function inscritos(){
        return $this->hasMany('App\Models\Estudiante')->count();
    }
    public function proyectos(){
        return $this->hasMany('App\Models\Proyecto');
    } 
}

