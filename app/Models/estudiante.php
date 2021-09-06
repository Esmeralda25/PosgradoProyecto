<?php

namespace App\Models;

 

class Estudiante extends Usuario
{
 
    protected $fillable=['nombre','correo','password','pes_id',
    'compromisos_id','actividades_id','periodos_id', 'cursando'];
    
    public $timestamps = false;
    

    
    public function nivel(){
        return "Estudiante";
    }
    public function pe(){
        return $this->belongsTo('App\Models\Pe','pes_id','id');
    }

    public function periodo(){
        return $this->hasOne('App\Models\Periodo','id','cursando');
    }

    public function semestreActual(){
        return $this->hasOne('App\Models\Periodo','id','periodos_id');
    }
    
    public function proyecto(){
        return $this->belongsTo('App\Models\Proyecto','id','estudiante_id');
    }



}
