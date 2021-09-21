<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesgloceEvaluacion extends Model
{
    protected $table = 'desgloce_evaluacion';
    protected $fillable=['evaluacion_id','docentes_id','concepto','valor','observacion'];
    public $timestamps = false;


    public function calificadores(){
    
        return $this->hasOne('App\Models\Docente','id','docentes_id');
    }
    public function cali(){
        return $this->belongsTo('App\Models\Evaluacion');
    }
}


