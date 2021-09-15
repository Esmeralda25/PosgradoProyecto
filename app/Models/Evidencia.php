<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model 
{
    protected $fillable=[  'adquirido_id', 'archivo' ];
    public $timestamps = false;

}  
