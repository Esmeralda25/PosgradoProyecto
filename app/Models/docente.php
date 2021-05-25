<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class docente extends Authenticatable
{
    
    protected $fillable=['nombre','correo', 'password'];
    public $timestamps = false;
}
