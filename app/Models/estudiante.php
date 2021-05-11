<?php

namespace App\Models;



class Estudiante extends Usuario
{
    
    protected $fillable=['usario_id','correo','password'];
    public $timestamps = false;

    
}
