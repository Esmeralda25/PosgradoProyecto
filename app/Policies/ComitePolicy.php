<?php

namespace App\Policies;

use App\Models\Usuario;
use App\Models\Pe;
use App\Models\Proyecto;


use Illuminate\Auth\Access\HandlesAuthorization;

class ComitePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
