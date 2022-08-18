<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;


class Generacion extends Model
{
    public $table = "generaciones";
    protected $fillable=['nombre','descripcion','pe_id'];
    public $timestamps = false;

    public function periodos(){
        return $this->hasMany('App\Models\Periodo');
    }
    /* public function estudiante(){
        return $this->hasMany('App\Models\Estudiante','estudiante_id','id');
    }  */
 
}