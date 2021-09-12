<?php

namespace App\Policies;

use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class EstudiantePolicy
{
    use HandlesAuthorization;

    public function estudianteAutorizado(Estudiante $estudiante){
        return true; //Aun no esta terminado ing
    }
}
