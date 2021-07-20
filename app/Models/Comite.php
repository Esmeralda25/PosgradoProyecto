<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    protected $fillable=[ 'asesor', 'revisor1', 'revisor2', 'revisor3'];
    public $timestamps = false;
    public function docenteAsesor(){
        return $this->hasOne('App\Models\Docente','id','asesor');

 
    }
 
}
