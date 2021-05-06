<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Authenticatable
{
    protected $fillable=['usario_id','correo','password'];
    public $timestamps = false;
}
