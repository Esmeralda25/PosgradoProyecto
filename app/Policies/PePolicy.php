<?php

namespace App\Policies;

use App\Models\Usuario;
use App\Models\Pe;
use Illuminate\Auth\Access\HandlesAuthorization;

class PePolicy
{
    use HandlesAuthorization;
    
    public function pesAutorizado(Pe $pe){
        
    }
}
