<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable=['id','titulo','hipotesis','objetivos','objetivose', 'avance','comite','estudiante_id', 'periodo_id','calificacion_id', 'compromiso'];
    
    public $timestamps = false;  

    public function estudiante(){
        return $this->hasOne('App\Models\estudiante','id','estudiante_id');
    }
    public function comiteTutorial(){
        return $this->hasOne('App\Models\Comite','id','comite');
         
    }
    public function periodo(){
        return $this->hasOne('App\Models\Periodo','id','periodo_id');
    }

    public function compromiso(){
        return $this->hasOne('App\Models\Compromiso','id','compromiso');
    }
    public function compromisos($semestre){
        return $this->hasMany('App\Models\Adquirido','proyectos_id','id')
        ->where('periodos_id',$semestre)
        ;
    }

    public function reporte($semestre){
        return $this->hasOne('App\Models\Reporte','proyecto_id','id')
        ->where('periodo_id',$semestre)
        ;
    }

    public function actividades($semestre){
        return $this->hasMany('App\Models\Actividad','proyectos_id','id')
        ->where('periodos_id',$semestre)
        ;

    }

    public function calificaciones()
    {
        return $this->hasManyThrough(DesgloceEvaluacion::class, Evaluacion::class);
    }

    public function promedio()
    {
        return $this->hasMany('App\Models\Evaluacion','proyecto_id','id');
    }
    
    
}
