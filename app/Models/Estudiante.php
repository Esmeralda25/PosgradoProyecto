<?php

namespace App\Models;

 

class Estudiante extends Usuario
{
 
    protected $fillable=['nombre','correo','password','pe_id',
    'compromisos_id','actividades_id','periodo_id', 'cursando'];
    
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

     
    public function nivel(){
        return "Estudiante";
    } 
    public function pe(){
        return $this->belongsTo(Pe::class);
    }

    public function periodo(){
        return $this->belongsTo(Periodo::class)
        ->withDefault(
            [
                'id' => 0,
                'nombre' => 'No esta inscrito en algun periodo'
            ]
        );
   }

    public function semestre(){
        return $this->belongsTo(Periodo::class,'periodo_id','id');
    }
    
    public function proyecto(){
        return $this->hasOne(Proyecto::class);
    }
}
