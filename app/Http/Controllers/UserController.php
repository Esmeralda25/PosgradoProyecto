<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Adscripcion;

use App\Models\Pe;
use App\Models\Comite;
use App\Models\Proyecto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 


class UserController extends Controller
{
    public function index()
    {
        $usuario = \Session::get('usuario');
        $usuario = $usuario->fresh();
       //echo "entra coordinador: $usuario->nombre con coordinador $usuario->coordinador  ";
       return view('coordinador.index')->with('pe',$usuario);
        //return view('coordinador.index');//->with('add',$add);
    }

    public function _listarUsuarios(){
/*
        $coordinador = \Session::get('usuario');
        $coordinador = $coordinador->fresh();

        //$estudiantes = Estudiante::where('pes_id',$coordinador->id)->get();

        $estudiantes =  DB::table('estudiantes')->select('nombre','id', DB::raw("'Estudiante' as nivel") )->where('pes_id',$coordinador->id);
        // "SELECT nombre FROM estudiantes where pes_id = 5"
        
        
        $usuarios =  DB::table('docentes')
        ->select('nombre','id', DB::raw("'Docente' as nivel") )
        ->whereIn('id', DB::table('adscripciones')->select('docentes_id')->where('pes_id',$coordinador->id) )
        ->union($estudiantes)
        ->paginate(8);
        // "SELECT nombre FROM docentes where id in (select docentes_id where pes_id = 5 )"
        // 
        return view('coordinador.listar-usuarios',compact('usuarios'));
*/
    }


    public function password($tipo, $id){
        if ($tipo == "Estudiante"){
            $estudiante= Estudiante::find($id);
            return view('coordinador.password-estudiante')->with('estudiante',$estudiante);  
        }else{
            $docente= Docente::find($id);
            return view('coordinador.password-docente')->with('docente',$docente);    
        }

    }

    public function eliminarUsuario($tipo, $id)
    {
        if ($tipo == "Estudiante"){
            try{
                Estudiante::destroy($id);
                return redirect('listar-usuarios')->with('sborrae','Estuadiante eliminado correctamente');
            } catch (\Throwable $th) {
                return redirect('listar-usuarios')->with('nborrae','No se pudo eliminar al estudiante, verifique');
            }    
        }else{
            try{
                //primero debes eliminar la asignacion
                Adscripcion::where('docentes_id',$id)->delete(); //deberia ser docente_id por ser llave foranea
                Docente::destroy($id);
                return redirect('listar-usuarios')->with('sborrad','Docente eliminado correctamente');
                
            } catch (\Throwable $th) {
                return redirect('listar-usuarios')->with('nborrad','No se pudo eliminar al docente ya que pertenece a un comite tutorial de un proyecto activo');
                
            }
    
        }




    }

   
    public function show($id)
    {
        
    }

    
    public function editarUsuario($tipo, $id)
    {

        if ($tipo == "Estudiante"){
            $estudiante= Estudiante::find($id);
            return view('coordinador.edit-estudiante')->with('estudiante',$estudiante);  
        }else{
            $docente= Docente::find($id);
            return view('coordinador.edit-docente')->with('docente',$docente);    
        }

    }

    public function actualizarUsuario(Request $request, $tipo, $id)
    {
        
        if ($tipo == "Estudiante"){
        
            $estudiante = request()->except('_token');
            
            $registro = Estudiante::find($id);

            $registro->fill($estudiante);
            $registro->save();


        }else{
            $docente = request()->except('_token');
            $registro = Docente::find($id);
            $registro->fill($docente);
            $registro->save();
    

        }

        return redirect('listar-usuarios')->with('editar','Usuario actualizado correctamente'); 

    }
    



    

    public function guardarPassword(Request $request, $tipo, $id){

        $rules = [
            'password' => 'required',
        ];
        
        $messages = [
            'password.required' => 'El campo es requerido',
        ];


        if ($tipo == "Estudiante"){       
             $estudiante= Estudiante::find($id);
             $estudiante->password = Hash::make($request->password);
             $estudiante->save();
             return redirect('listar-usuarios')->with('mensaje','Contraseña cambiada correctamente');
        }else{
            $docente= Docente::find($id);
            $docente->password = Hash::make($request->password);
            $docente->save();
            return redirect('listar-usuarios')->with('mensaje','Contraseña cambiada correctamente');
        }
    }
    public function manual()
    {
        return view('manual');

    }

    

   
}