<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model 
{
    public $table = "periodos";
    protected $fillable=['nombre','fechaInicio','fechaFin','estado','rubrica_id', 'generacion_id'];
    public $timestamps = false;

    public function generacion(){
        return $this->belongsTo(Generacion::class);
    }
    public function periodo(){
        return $this->generacion->periodos()->where('id','<',$this->id);
    }
    public function pe(){
        return $this->hasOneThrough(
            Pe::class,
            Generacion::class,
            'id',//generaciones.id
            'id',//pes.id
            'generacion_id',//no se que hace
            'pe_id'//generaciones.pe_id
        );
    }
    public function rubrica(){
        return $this->belongsTo(Rubrica::class)
        ->withDefault(
            [
                'id'=>0,
                'nombre' => 'Sin asignar'
            ]
        );
    } 

    public function actividades(){
        if(is_null($this->laravel_through_key)) 
            return $this->hasMany(Actividad::class);
        else
            return $this->hasMany(Actividad::class)->where('proyecto_id',$this->laravel_through_key);
    }


    public function compromisos(){
        if(is_null($this->laravel_through_key)) 
            return $this->hasMany(Adquirido::class);
        else
            return $this->hasMany(Adquirido::class)->where('proyecto_id',$this->laravel_through_key);
    }


    public function evaluaciones()
    {
        if(is_null($this->laravel_through_key)) 
            return $this->hasMany(Evaluacion::class);
        else
            return $this->hasMany(Evaluacion::class)->where('proyecto_id',$this->laravel_through_key);
    }

    public function promedio(){
        $cuantos = 0;
        $suma = 0;
        foreach ($this->evaluaciones as $evaluacion) {
            if (!is_null($evaluacion->calificacion)){
                $cuantos ++;
                $suma += $evaluacion->calificacion;
            }    
        }
        if ($cuantos != 0)
            return ($suma/$cuantos);
        else 
            return 0;

    }
    public function estudiantes(){
       return $this->hasMany(Estudiante::class);
    }
    public function cuantosInscritos(){
        return $this->hasMany(Estudiante::class)->count();
    }
    public function proyectos(){
        return $this->hasMany(Proyecto::class);
    } 
}

