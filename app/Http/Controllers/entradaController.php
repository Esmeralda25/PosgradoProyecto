<?php
/* FUNCIONES DEL LOGIN     */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use App\Models\docente;
use App\Models\Estudiante;
use App\Models\Pe;
class entradaController extends Controller
{
    public function validar (Request $peticion){
        $usuario = Estudiante::where('correo', $peticion->input('nombre'))->first();

        if(!is_null($usuario) ){
            //es un estudiante debo checar su password   
            $password_dieron =  $peticion->input('palabra');
            
            $password_guadado = $usuario->password;
            
            
            if (Hash::check($password_dieron, $password_guadado)) {               
                \Session::put('usuario' ,  $usuario );
                return  redirect('/estudiante');
            }
        }

        $usuario = Pe::where('correo', $peticion->input('nombre'))->first();
        
        if(! is_null($usuario) ){
            //es un coordiandor debo checar su password (checar si es informatico)
            $password_dieron =  $peticion->input('palabra');
            $password_guadado = $usuario->password;
            if (Hash::check($password_dieron, $password_guadado)) {
                
                \Session::put('usuario' ,  $usuario );

                return  redirect('/coordinador');
            }
        }
        
        $usuario = docente::where('correo', $peticion->input('nombre'))->first();
        if(! is_null($usuario)){
            //es un docente se debe verificar su password
            $password_dieron = $peticion->input('palabra');
            $password_guadado = $usuario->password;
            if (Hash::check($password_dieron, $password_guadado)) {
                \Session::put('usuario' ,  $usuario );
                return  redirect('/docente');
            }
        }

        echo "USUARIO NO REGISTRADO";
        }
}