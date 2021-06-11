<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compromiso extends Model
{
    public $table = "compromisos";
    protected $fillable=['titulo'];
    public $timestamps = false;
}
