<?php

namespace App\Models;


class Pe extends Usuario
{
    public $table = "pes";
    protected $fillable=['coordinador','correo','password','nombre'];
    public $timestamps = false;
}
