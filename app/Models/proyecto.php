<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    protected $fillable=['Titulo','Hipotesis','Objetivos','Reporte','Proyectoscol','comite','avance','estudiantes_id'];
    public $timestamps = false;
}
