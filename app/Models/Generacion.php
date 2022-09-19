<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;
use Pe;

class Generacion extends Model
{
    public $table = "generaciones";
    protected $fillable=['nombre','descripcion','pe_id'];
    public $timestamps = false;

    public function periodos(){
        return $this->hasMany(Periodo::class)
        ->orderBy('fechaInicio','ASC')->orderBy('fechaFin','ASC')
        ;
    }
    public function pe(){
        return $this->belongsTo(Pe::class);
    }
    public function rubricas(){
        return $this->pe->rubricas();
    }
    public function estudiante(){
        return $this->hasManyThrough(
            Estudiante::class,
            Periodo::class,
            'generacion_id',//es el laravel_through_key  &  ?'' mediante.class_id
            'periodo_id',//key de tiene para hacer join
            '',//mediante.algo con lo que voy a comparar el class.id | ?'' toma el key de mediante para reemplazar & !exist agrega is null 
            'id',//foreing key de mediante para hacer join
        );
    }  
 
}