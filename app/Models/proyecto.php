<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable=['id','titulo','hipotesis','objetivos','objetivose','comite','estudiante_id'];
    public $timestamps = false;

    public function estudiante(){
        return $this->hasOne('App\Models\estudiante','id','estudiante_id');
    }
    public function comiteTutorial(){
        return $this->hasOne('App\Models\Comite','id','comite');
        /*->withDefault([
            'asesor' => 'No asignado',
        ]) */
        
    }
}
