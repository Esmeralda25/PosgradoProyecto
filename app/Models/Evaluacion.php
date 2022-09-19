<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'evaluaciones';
    protected $fillable = ['calificacion','proyecto_id','fecha','docente_id','periodo_id'];
    public $timestamps = false;

    public function desgloces(){
        return $this->hasMany(DesgloceEvaluacion::class);       
    }
    public function docente(){
        return $this->belongsTo(Docente::class);       
    }
    public function periodo(){
        return $this->belongsTo(Periodo::class);       
    }
}
