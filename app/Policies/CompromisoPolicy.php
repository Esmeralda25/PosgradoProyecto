<?php

namespace App\Policies;

use App\Models\Pe;
use App\Models\Compromiso;

use Illuminate\Auth\Access\HandlesAuthorization;

class CompromisoPolicy
{
    use HandlesAuthorization;

    public function compro(Pe $usuario, Compromiso $cmp){
        if($usuario->id === $cmp->$usuario_id){
        return true;
       } 
       else{
           return false;
       }
    }
    
}
