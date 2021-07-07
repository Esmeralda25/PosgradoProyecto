<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    public $table = "calificaciones";
    protected $fillable=['calificacion1','calificacion2','calificacion3','calificacion4','observaciones'];
    public $timestamps = false;
}
