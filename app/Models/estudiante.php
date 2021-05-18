<?php

namespace App\Models;



class Estudiante extends Usuario
{
 
    protected $fillable=['correo','password'];
    public $timestamps = false;

    
}
