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
        return $this->belongsTo('App\Models\estudiante');
    }
    public function comite(){
        return $this->belongsTo('App\Models\Comite');
         
    }

    public function pe(){
        return $this->hasOneThrough(
            Pe::class,
            Estudiante::class,
            'id',
            'id',
            'estudiante_id',
            'pe_id',
            'estudiante_id'
        );
    }
    /*
            hasOneThrough(
            'Modelo que tiene',
            'Modelo atraves',
            'el key de la segunda que sea igual al quinto parametro',
            'el key de la primera que enlaza con el foreing key de la segunda',
            'caul o vacio que significa el local key'
            'el foreing key en la segunda que enlaza a la primera '
        );    
    */
    public function generacion(){

    }
    public function periodo(){
        return $this->belongsTo('App\Models\Periodo','periodo_id','id')
        ->withDefault(
            [
                'id' => 0,
                'nombre' => 'Sin periodo asignado en la creacion'
            ]
        );
    }


    
    public function periodos(){
        //le agrega laravel_through_key
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
    

    public function reporte($semestre){
        return $this->hasOne('App\Models\Reporte','proyecto_id','id')
        ->withDefault(
            [
                'id' => 0,
                'reporte' => 'Sin reporte entregado'
            ]
        )
        ->where('periodo_id',$semestre)
        ;
    }

    public function actividades($periodo_id){   
        return $this->hasMany('App\Models\Actividad')->where('periodo_id',$periodo_id);
    }
    public function compromisos($periodo_id){
        return $this->hasMany('App\Models\Adquirido')->where('periodo_id',$periodo_id);
    }


    
    public function nuevaActividad()
    {
        return $this->hasMany('App\Models\Actividad','proyectos_id','id');
    }


    public function evidencias()
    {
        return $this->hasManyThrough(Evidencia::class, Adquirido::class);
    }


    public function evaluaciones($periodo_id)
    {
        return $this->hasMany('App\Models\Evaluacion')
        ->where('periodo_id');

    }

    public function nuevoPeriodo()
    {
        return $this->hasManyThrough(Periodo::class, Estudiante::class);
    }
    
    
}
