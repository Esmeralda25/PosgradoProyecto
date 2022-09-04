<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compromiso extends Model 
{
    public $table = "compromisos";
    protected $fillable=['titulo','pe_id'];
    public $timestamps = false;

    public function pe(){
        return $this->belongsTo(Pe::class)
        ->withDefault(
            [
                'id' => '0',
                'nombre' => 'Sin programa'
            ]
        );
    }
}  
