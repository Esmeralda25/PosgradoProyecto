<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class Asesor extends Model
{
    public $table = "docentes";
    protected $fillable=['nombre','correo', 'password'];
    public $timestamps = false;
}
