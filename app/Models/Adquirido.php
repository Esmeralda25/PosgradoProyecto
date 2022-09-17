<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adquirido extends Model 
{
    protected $fillable=[  'que', 'cuantos_programo', 'cuantos_cumplio', 'proyecto_id', 'periodo_id'];
    public $timestamps = false;

    public function evidencia(){
        return $this->hasOne(Evidencia::class)
        ->withDefault(
            [
                'adquirido_id'=> 0, 
                'archivo' => null, 
            ]
        );
    }
    
    public function proyecto(){
        return $this->belongsTo(Proyecto::class);

    }
}  
