<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrica extends Model
{
    public $table = "rubricas";
    protected $fillable=['nombre','tipo'];
    public $timestamps = false;

    public function criteriosProyecto(){
        return $this->hasMany('App\Models\Criterio', 'Rubricas_id','id');

        $relaciones = Rubrica::find(1)->Criterio;
        
        foreach ($relaciones as $relacion) {
            $relacion->descripcion;
        }
       
    }


}
