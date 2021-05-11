<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class docente extends Authenticatable
{
    //Crear en la bd, en la tabla docente los siguientes parametros en ese orden
    protected $fillable=['nombre','apellidop','apellidom','correo', 'password'];
    public $timestamps = false;
}
