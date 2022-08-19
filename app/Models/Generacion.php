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
        return $this->hasMany('App\Models\Periodo')->orderBy('fechaInicio','ASC');
    }
    public function pe(){
        return $this->belongsTo('App\Models\Pe');
    }
    public function rubricas(){
        return $this->pe->rubricas();
    }
    /* public function estudiante(){
        return $this->hasMany('App\Models\Estudiante','estudiante_id','id');
    }  */
 
}