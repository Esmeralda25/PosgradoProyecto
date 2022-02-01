<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Usuario;
use App\Models\Pe;
use App\Models\Generacion;



class GeneracionPolicy
{
    use HandlesAuthorization;

   public function generacion(Pe $pes, Generacion $id){
    if($pes->id == $id->$pes_id){
    return true;
   } 
   else{
       return false;
   }
}
}
