<?php

namespace App\Policies;

use App\Models\Pe;
use App\Models\Compromiso;

use Illuminate\Auth\Access\HandlesAuthorization;

class CompromisoPolicy
{
    use HandlesAuthorization;

    public function compro(Pe $pes, Compromiso $cmp){
        if($pes->id === $cmp->$pes_id){
        return true;
       } 
       else{
           return false;
       }
    }
    
}
