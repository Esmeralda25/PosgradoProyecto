<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'evaluaciones';
    protected $fillable = ['calificacion','proyecto_id','fecha','docente_id','periodo_id'];
    public $timestamps = false;

    public function comoFue(){
        return $this->hasMany('App\Models\DesgloceEvaluacion', 'evaluacion_id','id');       
    }
    //esta relacion no se si esta bien
    public function estudiante(){
        return $this->hasOne('App\Models\Estudiante', 'id','estudiante_id');       
    }
    public function docente(){
        return $this->hasOne('App\Models\Docente', 'id','docente_id');       
    }
    public function periodo(){
        return $this->hasOne('App\Models\Periodo', 'id','periodo_id');       
    }
}
