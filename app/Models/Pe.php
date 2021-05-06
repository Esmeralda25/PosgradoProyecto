<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Pe extends Authenticatable
{
    protected $fillable=['coordinador','correo','password','nombre'];
    public $timestamps = false;
}
