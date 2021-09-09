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
        $identificacion = "";
        $usuario = Estudiante::where('correo', $peticion->input('nombre'))->first();

        if(!is_null($usuario) ){
            //es un estudiante debo checar su password   
            $password_dieron =  $peticion->input('palabra');            
            $password_guadado = $usuario->password;
            //puesto: pe : nombre
            if (Hash::check($password_dieron, $password_guadado)) {               
                $identificacion = "Estudiante : " . $usuario->pe->nombre . ":" . $usuario->nombre ;
                \Session::put('identificacion' ,  $identificacion );
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
                $identificacion = "Coordiandor : " . $usuario->nombre . ":" . $usuario->coordiandor ;
                \Session::put('identificacion' ,  $identificacion );
                \Session::put('usuario' ,  $usuario );
                return  redirect('/coordinadores');
            }
        }
        
        $usuario = docente::where('correo', $peticion->input('nombre'))->first();
        //dd($peticion->input('nombre'));
        if(! is_null($usuario)){
            //es un docente se debe verificar su password
            $password_dieron = $peticion->input('palabra');
            $password_guadado = $usuario->password;

            if (Hash::check($password_dieron, $password_guadado)) {
                $identificacion = "Docente : " . $usuario->nombre ;
                \Session::put('identificacion' ,  $identificacion );

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

        if($peticion->input('nombre') == "informatico@gmail.com" ){
            if( $peticion->input('palabra') == "asd" ){
                return  redirect('/pes');
            }
        }
        echo "USUARIO NO REGISTRADO";
        return view('user_notfound');//si separaron la palabra user porque no separaron la palabra not

        }

        public function logout (Request $peticion){
//isset($_Session['usuario'])
            if(\Session::has('usuario') ){               
                \Session::forget('usuario');
                \Session::forget('identificacion');
                //session_destroy();
                //header('Location: welcome.blade.php');
                //header('Location:'.$URL.'/welcome');
                return  redirect('/');
            }else{
                return  redirect('/');
//                echo "No existe sesión";
            }
        }  
}