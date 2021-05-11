<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuario extends Authenticatable
{
    public $table = "estudiantes";
}
