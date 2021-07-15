<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable=['id','titulo','hipotesis','objetivos','objetivose', 'avance','comite','estudiante_id', 'periodo_id','calificacion_id'];
    
    public $timestamps = false;

    public function estudiante(){
        return $this->hasOne('App\Models\estudiante','id','estudiante_id');
    }
    public function comiteTutorial(){
        return $this->hasOne('App\Models\Comite','id','comite');
        
    }
    public function periodo(){
        return $this->hasOne('App\Models\Periodo','id','periodo_id');
    }
    
    
}
