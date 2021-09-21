<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'evaluaciones';
    protected $fillable = ['calificacion','proyecto_id','fecha'];
    public $timestamps = false;

    public function comoFue(){
        return $this->hasMany('App\Models\DesgloceEvaluacion', 'evaluacion_id','id');       
    }
}
