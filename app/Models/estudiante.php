<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $fillable=['usario_id','correo','password'];
    public $timestamps = false;
}
