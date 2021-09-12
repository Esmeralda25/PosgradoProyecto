<?php

namespace App\Policies;

use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocentePolicy
{
    use HandlesAuthorization;

    public function docenteAutorizado(Docente $docente){
        return true; //Aun no esta terminado ing
    }
}
