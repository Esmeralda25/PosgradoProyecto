<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrica extends Model
{
    public $table = "rubricas";
    protected $fillable=['nombre','tipo','pe_id'];
    public $timestamps = false;

    public function criteriosProyecto(){
        return $this->hasMany('App\Models\Criterio', 'Rubricas_id','id');

    
       
    }


}
