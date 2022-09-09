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
        return $this->belongsTo('App\Models\Pe','pe_id','id');
    }

    public function periodo(){
        return $this->belongsTo('App\Models\Periodo')
        ->withDefault(
            [
                'id' => 0,
                'nombre' => 'No esta inscrito en algun periodo'
            ]
        );
;
    }

    public function semestre(){
        return $this->hasOne('App\Models\Periodo','id','periodo_id');
    }

    public function nuevoPeriodo(){
        return $this->hasMany('App\Models\Periodo','id','periodo_id');
    }
    
    public function proyecto(){
        return $this->hasOne('App\Models\Proyecto');
    }

    public function desgloceEvaluaciones(){
        return $this->belongsTo('App\Models\DesgloceEvaluacion','evaluaciones_id','id');
    }

}
