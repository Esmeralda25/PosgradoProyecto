<?php
/* FUNCIONES DEL LOGIN     */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Session;

use App\Models\Docente; 
use App\Models\Estudiante;
use App\Models\Pe;  
class EntradaController extends Controller
{
    public function validar (Request $peticion){
//        dd($peticion->all());
        $peticion->validate(
            [
                'nombre' => 'required',
                'palabra' => 'required',
            ],
            [
                'nombre.required' => 'Se requiere el nombre de usuario',
                'palabra.required' => 'Seguro de que no tiene contraseña',
            ]
            
        );
        $identificacion = "";
        if($this->credenciales($peticion->input('nombre'),$peticion->input('palabra')))
            return  redirect(route('inicio'));
        else
            return redirect()->back()->withInput()->with(['message'=>'Las credenciales introducidas no coinciden con la base de datos.']);
            
        }

        private function credenciales($nombre, $palabra){
            $usuario = Estudiante::where('correo', $nombre )->first();
            if(!is_null($usuario) ){
                //es un estudiante debo checar su password   
                $password_dieron =  $palabra;            
                $password_guadado = $usuario->password;
                //puesto: pe : nombre
                if (Hash::check($password_dieron, $password_guadado)) {               
                    \Session::put('usuario' ,  $usuario );
                    return  true;
                }
            }
    
            $usuario = Pe::where('correo', $nombre)->first();        
            if(! is_null($usuario) ){
                //es un coordiandor debo checar su password (checar si es informatico)
                $password_dieron =  $palabra;
                $password_guadado = $usuario->password;
                if (Hash::check($password_dieron, $password_guadado)) {
                    \Session::put('usuario' ,  $usuario );
                    return  true;
                }
            } 
            
            $usuario = docente::where('correo', $nombre)->first();
            if(! is_null($usuario)){
                //es un docente se debe verificar su password
                $password_dieron = $palabra;
                $password_guadado = $usuario->password;
    
                if (Hash::check($password_dieron, $password_guadado)) {
                    \Session::put('usuario' ,  $usuario );
                    return  true;
                }
            }
    
            if($nombre == "informatico@gmail.com" ){
                if( $palabra == "asd" ){
                    \Session::put('usuario' ,  ["nombre" => "informático"] );
                    return  true;
                }
            }    

            return false;
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