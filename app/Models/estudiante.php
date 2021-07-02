<?php

namespace App\Models;

 

class Estudiante extends Usuario
{
 
    protected $fillable=['nombre','correo','password'];
    public $timestamps = false;
    public function nivel(){
        return "Estudiante";
    }
    public function pe(){
        return $this->belongsTo('App\Models\Pe','pes_id','id');
    }

}
