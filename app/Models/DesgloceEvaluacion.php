<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesgloceEvaluacion extends Model
{
    protected $table = 'desgloce_evaluacion';
    protected $fillable=['evaluacion_id','concepto','valor','observacion'];
    public $timestamps = false;

    public function docente(){
        return $this->hasOneThrough(
            'App\Models\Docente',
            'App\Models\Evaluacion',
            'id',
            'id',
            'evaluacion_id', 
            'docente_id'
        );
    }
    public function evaluacion(){
        return $this->belongsTo('App\Models\Evaluacion');
    }
}


