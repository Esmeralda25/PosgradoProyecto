<?php

namespace App\Policies;

use App\Models\Pe;
use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class PePolicy
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
     * @param  \App\Models\Pe  $pe
     * @return mixed
     */
    public function view(Usuario $usuario, Pe $pe)
    {
        //
    }

    public function listar(Usuario $usuario, Pe $pe)
    {
        if($usuario->rol=='informatico') return true;
        else return false;
    }

    public function create(Usuario $usuario)
    {
        return $usuario->rol == 'informatico';
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return mixed
     */
    

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Pe  $pe
     * @return mixed
     */
    public function update(Usuario $usuario, Pe $pe)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Pe  $pe
     * @return mixed
     */
    public function delete(Usuario $usuario, Pe $pe)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Pe  $pe
     * @return mixed
     */
    public function restore(Usuario $usuario, Pe $pe)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Pe  $pe
     * @return mixed
     */
    public function forceDelete(Usuario $usuario, Pe $pe)
    {
        //
    }
}
