<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginestudiante extends Model
{
    protected $fillable=['coordinador','correo','password','nombre'];
    public $timestamps = false;
}
