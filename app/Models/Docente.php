<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
 
class Docente extends Authenticatable
{
    
    protected $fillable=['nombre','correo', 'password'];
    public $timestamps = false;

    public function proyectos(){
        /*
        $comites = Comite::where('asesor', $this->id)
                            ->orWhere('revisor1', $this->id)
                            ->orWhere('revisor2', $this->id)
                            ->orWhere('revisor3', $this->id)
                        ->select(id);
        */
        
        return Proyecto::whereIn('comite_id', 
            Comite::where('asesor', $this->id)
            ->orWhere('revisor1', $this->id)
            ->orWhere('revisor2', $this->id)
            ->orWhere('revisor3', $this->id)
            ->select('id')
        )->get();

    }

    public function adscripciones(){
        return $this->hasMany(Adscripcion::class);
    } 


    public function programas(){
        return $this->hasManyThrough(
            Pe::class,
            Adscripcion::class,
            'docente_id',
            'id',
            'id',
            'pe_id',
        );
    } 


}
