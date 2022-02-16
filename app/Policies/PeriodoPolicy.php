<?php

namespace App\Policies;

use App\Models\Usuario;
use App\Models\Generacion;
use App\Models\Periodo;



use Illuminate\Auth\Access\HandlesAuthorization;

class ProyectoPolicy
{
    use HandlesAuthorization;

    public function perio(Periodo $periodo, Generacion $id){
        if($periodo->id == $id->$periodo_id){
        return true;
       } 
       else{
           return false;
       }
    }
}
