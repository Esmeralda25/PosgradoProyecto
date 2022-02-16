<?php

namespace App\Policies;

use App\Models\Usuario;
use App\Models\Comite;
use App\Models\Proyecto;
use App\Models\Pe;


use Illuminate\Auth\Access\HandlesAuthorization;

class ProyectoPolicy
{
    use HandlesAuthorization;

    public function comit(Proyecto $pro, Comite $com){
        if($pro->id === $com->$pro_id){
        return true;
       } 
       else{
           return false;
       }
    }
}
