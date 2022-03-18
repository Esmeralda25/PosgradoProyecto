<?php

namespace App\Policies;

use App\Models\Compromiso;
use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompromisoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return mixed
     */
    public function viewAny(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Compromiso  $compromiso
     * @return mixed
     */
    public function view(Usuario $usuario, Compromiso $compromiso)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return mixed
     */
    public function create(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Compromiso  $compromiso
     * @return mixed
     */
    public function update(Usuario $usuario, Compromiso $compromiso)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Compromiso  $compromiso
     * @return mixed
     */
    public function delete(Usuario $usuario, Compromiso $compromiso)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Compromiso  $compromiso
     * @return mixed
     */
    public function restore(Usuario $usuario, Compromiso $compromiso)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Compromiso  $compromiso
     * @return mixed
     */
    public function forceDelete(Usuario $usuario, Compromiso $compromiso)
    {
        //
    }
}
