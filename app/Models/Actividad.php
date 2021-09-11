<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model  
{
    public $table = "actividades";
    protected $fillable=[ 'nombre', 'periodo', 'proyectos_id', 'periodos_id'];
    public $timestamps = false;

}  
