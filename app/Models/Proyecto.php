<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable=['id','titulo','hipotesis','objetivo','objetivos_especificos', 'avance','comite_id','estudiante_id', 'periodo_id','calificacion_id', 'compromiso'];
    
    public $timestamps = false;  

    public function estudiante(){
        return $this->hasOne('App\Models\estudiante','id','estudiante_id');
    }
    public function comite(){
        return $this->hasOne('App\Models\Comite','id','comite_id');
         
    }
    /*
        return $this->hasOneThrough(
            'App\Models\Pe',
            'App\Models\Generacion',
            'id',//segundo.id
            'id',//primero.id
            'generacion_id',//no se que hace
            'pe_id'//segundo.primero_id
        );
    
    */
    public function generacion(){
/*
        return $this->hasOneThrough(
            Generacion::class, //related
            Periodo::class, //Through
            'id',//segundo.id
            'id',//primero.id
            '',//no se que hace
            'generacion_id'//segundo.primero_id
        );
*/
    }
    public function periodo(){
        return $this->belongsTo('App\Models\Periodo','periodo_id','id')
//        return $this->hasOne('App\Models\Periodo','id','periodo_id')
        ->withDefault(
            [
                'id' => 0,
                'nombre' => 'Sin periodo asignado'
            ]
        );
    }

    public function periodos(){
//adquiridos`.`d` = `periodos`.`b` where `adquiridos`.`a` is null"
        return $this->hasManyThrough(
            'App\Models\Periodo',
            'App\Models\Adquirido',
            'proyecto_id',
            'id',
            '',
            'periodo_id',
        )->distinct()
        ->orderBy('fechaInicio','asc')
        ;
    }

    public function compromiso(){
        return $this->hasOne('App\Models\Adquirido','id','compromiso');
    }
    
    public function compromisos($semestre){
        return $this->hasMany('App\Models\Adquirido','proyecto_id','id')
        ->where('periodo_id',$semestre)
        ;
    }

    public function reporte($semestre){
        return $this->hasOne('App\Models\Reporte','proyecto_id','id')
        ->where('periodo_id',$semestre)
        ;
    }

    public function actividades($semestre){
        return $this->hasMany('App\Models\Actividad','proyecto_id','id')
        ->where('periodo_id',$semestre)
        ;
    }

    public function nuevaActividad()
    {
        return $this->hasMany('App\Models\Actividad','proyectos_id','id');
    }


    public function evidencias()
    {
        return $this->hasManyThrough(Evidencia::class, Adquirido::class);
    }

    public function evaluaciones()
    {
        return $this->hasMany('App\Models\Evaluacion','proyecto_id','id');
    }

    public function pdf()
    {
        return $this->hasMany('App\Models\Reporte','proyecto_id','id');
    }
    public function nuevoPeriodo()
    {
        return $this->hasManyThrough(Periodo::class, Estudiante::class);
    }
    
    
}
