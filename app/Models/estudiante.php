<?php

namespace App\Models;



class Estudiante extends Usuario
{
 
    protected $fillable=['nombre','correo','password'];
    public $timestamps = false;

    
}
