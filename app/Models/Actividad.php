<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model  
{
    public $table = "actividades";
    protected $fillable=[ 'nombre', 'etapa', 'proyecto_id', 'periodo_id'];
    public $timestamps = false;

    //pero realmente la actividad depende del periodo
    public function proyecto()
    {
        return $this->belongsTo('App\Models\Proyecto');
    }
}  
