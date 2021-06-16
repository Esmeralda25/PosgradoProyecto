<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrica extends Model
{
    public $table = "rubricas";
    protected $fillable=['nombre','tipo'];
    public $timestamps = false;
}
