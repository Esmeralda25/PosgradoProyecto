<?php

namespace App\Models;


class Pe extends Usuario
{
    public $table = "pes";
    protected $fillable=['coordinador','correo','password','nombre'];
    public $timestamps = false;

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
            'pes_id', // Foreign key on the environments table...
            'id', //categoria_id // Foreign key on the deployments table...
            '' , //cid // Local key on the projects table...
            'docentes_id' // Local key on the environments table...
        );
    }
}
