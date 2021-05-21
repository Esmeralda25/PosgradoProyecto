<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable=['Titulo','Hipotesis','Objetivos','Objetivose','comite','estudiante_id'];
    public $timestamps = false;
}
