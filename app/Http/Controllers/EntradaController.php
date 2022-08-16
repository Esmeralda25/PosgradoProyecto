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
            ]
        );
        $identificacion = "";
        $usuario = Estudiante::where('correo', $peticion->input('nombre'))->first();

        if(!is_null($usuario) ){
            //es un estudiante debo checar su password   
            $password_dieron =  $peticion->input('palabra');            
            $password_guadado = $usuario->password;
            //puesto: pe : nombre
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
                return  view('coordinador.index')->with('pe',$usuario);
            }
        } 
        
        $usuario = docente::where('correo', $peticion->input('nombre'))->first();
        //dd($peticion->input('nombre'));
        if(! is_null($usuario)){
            //es un docente se debe verificar su password
            $password_dieron = $peticion->input('palabra');
            $password_guadado = $usuario->password;

            if (Hash::check($password_dieron, $password_guadado)) {
                \Session::put('usuario' ,  $usuario );
                return  redirect('/docentes');
            }
        }

        if($peticion->input('nombre') == "informatico@gmail.com" ){
            if( $peticion->input('palabra') == "asd" ){
                \Session::put('usuario' ,  ["nombre" => "informático"] );
                return  redirect(route('programas.index'));
            }
        }
        return redirect()->back()->withInput()->with(['mensaje'=>'usuario no encontrado']);

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