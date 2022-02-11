<?php

namespace App\Policies;


use App\Models\Rubrica;
use App\Models\Pe;

use Illuminate\Auth\Access\HandlesAuthorization;

class RubricaPolicy
{
    use HandlesAuthorization;

    public function rub(Pe $usuario, Rubrica $rubri){
        if($usuario->id === $rubri->$usuario_id){
        return true;
       } 
       else{
           return false;
       }
    }
}
