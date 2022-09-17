<?php

namespace App\Models;


class Pe extends Usuario
{
    public $table = "pes";
    protected $fillable=['coordinador','correo','password','nombre'];
    public $timestamps = false;
//    protected $with=["docentes"];


    public function proyectos(){
        return $this->hasManyThrough(
            proyecto::class,
            estudiante::class
        );
    }   

    public function proyectosSinComite(){
        return $this->hasManyThrough(
            proyecto::class,
            estudiante::class,   
            'pes_id', // estudiantes.pes_id 
            '', //estudiante_id
            '' , // Local key on the ___ table...
            'id' // estudiantes.id
        )
        ->whereNull('comite_id');   
    }

    public function docentes(){
        return $this->hasManyThrough(
            Docente::class,
            Adscripcion::class,
            'pe_id', // `adscripciones`.`pe_id`
            'id', //docentes`.`id`
            '' , //cid // esta debe de ser de docentes
            'docente_id' // adscripciones.docente_id
        );
    }

    public function rubricas(){
        return $this->hasMany(Rubrica::class,'pe_id','id');
    
    }
}
