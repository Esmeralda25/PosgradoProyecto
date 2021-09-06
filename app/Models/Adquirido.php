<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adquirido extends Model 
{
    protected $fillable=[  'que', 'cuantos_prog', 'cuantos_cumplidos', 'proyectos_id', 'periodos_id'];
    public $timestamps = false;

}  
