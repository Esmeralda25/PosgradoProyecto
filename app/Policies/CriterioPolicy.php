<?php

namespace App\Policies;

use App\Models\Usuario;
use App\Models\Rubrica;
use App\Models\Criterio;

use Illuminate\Auth\Access\HandlesAuthorization;

class CriterioPolicy
{
    use HandlesAuthorization;

    public function crit(Rubrica $rubrica, Criterio $id){
        if($rubrica->id == $id->$rubrica_id){
        return true;
       } 
       else{
           return false;
       }
    }
}
