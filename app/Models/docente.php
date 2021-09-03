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
        
        return Proyecto::whereIn('comite', 
        Comite::where('asesor', $this->id)
        ->orWhere('revisor1', $this->id)
        ->orWhere('revisor2', $this->id)
        ->orWhere('revisor3', $this->id)
        ->select('id')
                    )->get();

    }

    public function estudiante(){
        return $this->hasMany('App\Models\Estudiante','id','nombre');
    }
}
