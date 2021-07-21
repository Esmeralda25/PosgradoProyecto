<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    public $table = "periodos";
    protected $fillable=['nombre','fechaInicio','fechaFin','estado','rubrica', 'generacion_id'];
    public $timestamps = false;

    public function rubricaAUsar(){
        return $this->hasOne('App\Models\Rubrica','id','rubrica');
    }
}

