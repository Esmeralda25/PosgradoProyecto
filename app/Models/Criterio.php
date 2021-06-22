<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criterio extends Model
{
    public $table = "criterios";
    protected $fillable=['Rubricas_id','descripcion'];
    public $timestamps = false;
 
}
