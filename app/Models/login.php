<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    public $table="docente";
    protected $fillable=['correo','password','nombre', 'apaterno','amaterno','nivel'];
    public $timestamps = false;

}
