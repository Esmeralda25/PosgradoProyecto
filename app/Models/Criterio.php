<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criterio extends Model
{
    public $table = "criterios";
    protected $fillable=['rubrica_id','descripcion'];
    public $timestamps = false;

    public function rubrica(){
        return $this->belongsTo(Rubrica::class);
    }
 
}
