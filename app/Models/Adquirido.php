<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adquirido extends Model 
{
    protected $fillable=[  'que', 'cuantos_prog', 'cuantos_cumplidos', 'proyecto_id', 'periodo_id'];
    public $timestamps = false;

    public function evidencia(){
        return $this->hasOne('App\Models\Evidencia');
    }
}  
