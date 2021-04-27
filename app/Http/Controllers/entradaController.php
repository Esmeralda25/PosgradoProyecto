<?php
/* FUNCIONES DEL LOGIN     */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class entradaController extends Controller
{
    
    public function validar (Request $peticion){
        switch ($peticion->input('nombre')) {
            case 'coordinador':
               return redirect('coordinador');
                break;

            case 'estudiante':
                return redirect('estudiante');
                break;
            case 'docente':
                return redirect('docente');
                break;
            case 'informatico':
                return redirect('pes');
                break;
            
            default:
                # code...
                break;
        }

    }
}
