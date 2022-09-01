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
            estudiante::class,   
            'pes_id', // estudiantes.pes_id 
            '', //estudiante_id
            '' , // Local key on the ___ table...
            'id' // estudiantes.id
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
//"select * from `proyectos` inner join `estudiantes` on `estudiantes`.`id` = `proyectos`.`estudiante_id` where `estudiantes`.`pes_id` = ?"
// select * from `proyectos` inner join `estudiantes` on `estudiantes`.`id` = `proyectos`.`x`             where `estudiantes`.`pes_id` is null"
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
