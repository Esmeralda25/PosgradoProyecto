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
        return $this->belongsTo(Estudiante::class);
    }
    public function comite(){
        return $this->belongsTo(Comite::class);
         
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
    public function periodo(){
        return $this->belongsTo(Periodo::class)
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
            Periodo::class,
            Adquirido::class,
            'proyecto_id',
            'id',
            '',
            'periodo_id',
        )->distinct()
        ->orderBy('fechaInicio','asc')
        ;
    }


    public function reporte($semestre){
        return $this->hasOne(Reporte::class,'proyecto_id','id')
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
        return $this->hasMany(Actividad::class)->where('periodo_id',$periodo_id);
    }
    public function compromisos($periodo_id){
        return $this->hasMany(Adquirido::class)->where('periodo_id',$periodo_id);
    }
    public function evidencias()
    {
        return $this->hasManyThrough(Evidencia::class, Adquirido::class);
    }
    public function evaluaciones($periodo_id=null)
    {
        return $this->hasMany(Evaluacion::class)
        ->where('periodo_id',$periodo_id);
    }    
    
}
