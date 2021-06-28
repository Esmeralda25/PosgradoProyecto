<?php
/* FUNCIONES DEL LOGIN     */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use App\Models\Docente; 
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
                return  redirect('/estudiantes');
            }
        }

        $usuario = Pe::where('correo', $peticion->input('nombre'))->first();
        
        if(! is_null($usuario) ){
            //es un coordiandor debo checar su password (checar si es informatico)
            $password_dieron =  $peticion->input('palabra');
            $password_guadado = $usuario->password;
            if (Hash::check($password_dieron, $password_guadado)) {
                
                \Session::put('usuario' ,  $usuario );

                return  redirect('/coordinadores');
            }
        }
        
        $usuario = docente::where('correo', $peticion->input('nombre'))->first();
        if(! is_null($usuario)){
            //es un docente se debe verificar su password
            $password_dieron = $peticion->input('palabra');
            $password_guadado = $usuario->password;
            if (Hash::check($password_dieron, $password_guadado)) {
                \Session::put('usuario' ,  $usuario );
/*
                session_start -->es de php
                session_destroy(); --> es de php 

                \Session
*/
                //session_start();     CHECAR DIFERENCIA
                return  redirect('/docentes');
            }
        }

        echo "USUARIO NO REGISTRADO";
        return view('user_notfound');

        }

        public function logout (Request $peticion){
//isset($_Session['usuario'])
            if(\Session::has('usuario') ){               
                \Session::forget('usuario');
                //session_destroy();
                //header('Location: welcome.blade.php');
                //header('Location:'.$URL.'/welcome');
                return  redirect('/');
            }else{
                echo "No existe sesión";
            }
        }  
}