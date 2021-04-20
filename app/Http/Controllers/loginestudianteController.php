<?php

namespace App\Http\Controllers;
use App\Models\loginestudiante;
use Illuminate\Http\Request;

class loginestudianteController extends Controller
{
    public function index()
    {
        return view('login.plantillaloginestudiante');
    }
    public function validar (Request $peticion){
        switch ($peticion->input('nombre')) {
            case 'coordinador':
               return redirect('coordinador');
                break;

            case 'estudiante':
                return redirect('estumain');
                break;
            case 'docente':
                return redirect('docente');
                break;
            
            default:
                # code...
                break;
        }

    }
    
}
