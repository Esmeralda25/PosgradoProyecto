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
            'pes_id', // Foreign key on the environments table...
            '', //categoria_id // Foreign key on the deployments table...
            '' , //cid // Local key on the projects table...
            'id' // Local key on the environments table...
        );
    }

    public function docentes(){

        return $this->hasManyThrough(
            docente::class,
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
