<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asesor extends Model
{
    public $table = "docentes";
    protected $fillable=['nombre','apellidop','apellidom','correo', 'password'];
    public $timestamps = false;
}
