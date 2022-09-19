<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model 
{
    protected $fillable=[  'adquirido_id', 'archivo'  ];
    public $timestamps = false;

    public function adquirido(){
        return $this->belongsTo(Adquirido::class);
    }
    public function proyecto(){
        
        return $this->hasOneThrough(
            Proyecto::class,
            Adquirido::class,
            'id',// es el laravel_through_key & si queda en blanco sera mediante.mediante_id,
            'id',//key de Proyecto para hacer join
            'adquirido_id',//adquiridos.algo con lo que voy a comparar el class.id | ?'' toma el key de mediante para reemplazar & !exist agrega is null 
            'proyecto_id',//foreing key de Adquirido para hacer join
        );
    
    }
}  
