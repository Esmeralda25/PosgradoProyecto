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


class CoordinadorController extends Controller
{
    public function index()
    {
        $usuario = \Session::get('usuario');
        $usuario = $usuario->fresh();
       //echo "entra coordinador: $usuario->nombre con coordinador $usuario->coordinador  ";
       return view('coordinador.index')->with('pe',$usuario);
        //return view('coordinador.index');//->with('add',$add);
    }

    public function listarUsuarios(){
        $coordinador = \Session::get('usuario');
        $coordinador = $coordinador->fresh();

        //$estudiantes = Estudiante::where('pes_id',$coordinador->id)->get();

        $estudiantes =  DB::table('estudiantes')->select('nombre','id', DB::raw("'Estudiante' as nivel") )->where('pes_id',$coordinador->id);
        // "SELECT nombre FROM estudiantes where pes_id = 5"
        
        
        $usuarios =  DB::table('docentes')
        ->select('nombre','id', DB::raw("'Docente' as nivel") )
        ->whereIn('id', DB::table('adscripciones')->select('docentes_id')->where('pes_id',$coordinador->id) )
        ->union($estudiantes)
        ->get();
        // "SELECT nombre FROM docentes where id in (select docentes_id where pes_id = 5 )"
        // 

        return view('coordinador.listar-usuarios',compact('usuarios'));
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
                echo 'Usuario borrado correctamente'; //este echo se pierde, deberia de ser un ->with
            } catch (\Throwable $th) {
                return redirect('listar-usuarios')->with('nborrad','No se pudo eliminar al docente ya que pertenece a un comite tutorial de un proyecto activo');
                echo 'El usuario no se pudo borrar, verifiue de nuevo'; //este echo se pierde, deberia de ser un ->with
            }
    
        }




    }

    public function agregarUsuarios()
    {
            return view('coordinador.agregar-usuarios');
        
    }
    public function store(Request $request) //lo dejaré pero no todo es un resource y si lo es entonces no esta en su controlador
    {
        $pe = \Session::get('usuario');
        $estudiante = request()->except(['_token','nivel']);
        $docente = request()->except('_token');
        //dd($docente);
        $adscripcion = $request->all();

        if($request->input('nivel')=="Estudiante"){
            //echo "agregar estudiante";
            $estudiante['pes_id'] = $pe->id;
            $estudiante['password'] = bcrypt($request->password);
            Estudiante::insert($estudiante);
        }elseif($request->input('nivel')=="Docente"){
            //Docente::insert($docente);
            $nuevo = new docente();
            $nuevo->fill($docente);
            $nuevo->password = bcrypt($request->password);
            $nuevo->save();
            //modificar la adscripcion  a $pe->id del $nuevo->id
            $add = new Adscripcion();
            $add->pes_id = $pe->id;
            $add->docentes_id = $nuevo->id; 
            $add->save();

        }
        return redirect('listar-usuarios')->with('message','Usuario agregado correctamente');

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
    public function actualizarComite(Request $request, $id){
        
        if($request->asesor == $request->revisor1){
            return back()->with('message','No se pueden repetir docentes para un mismo proyecto, intenta nuevamente.');       
         }else
        if($request->asesor == $request->revisor2){
            return back()->with('message','No se pueden repetir docentes para un mismo proyecto, intenta nuevamente.'); 
         }else
        if($request->asesor == $request->revisor3){
            return back()->with('message','No se pueden repetir docentes para un mismo proyecto, intenta nuevamente.');    
        }else
        if($request->revisor1 == $request->revisor2){
            return back()->with('message','No se pueden repetir docentes para un mismo proyecto, intenta nuevamente.');        
        }else
        if($request->revisor1 == $request->revisor3){
            return back()->with('message','No se pueden repetir docentes para un mismo proyecto, intenta nuevamente.');   
        }else
        if($request->revisor2 == $request->revisor3){
            return back()->with('message','No se pueden repetir docentes para un mismo proyecto, intenta nuevamente.');        
        }else
        $docente  = \Session::get('usuario' );
        $docente = $docente->fresh();

        //reviso si ese proyecto ya tenia un comite
        $proyecto = Proyecto::find($id);
        $res = is_null($proyecto->comite);
        if(is_null($proyecto->comite)){
            $comite = new Comite;
            $comite->fill($request->all());
            $comite->save();    
            $proyecto->comite = $comite->id;
            $proyecto->save();    
        }else{
            $comite =  Comite::find($proyecto->comite);
            $comite->fill($request->all());
            $comite->save();    
        }

        return redirect("/listar-proyectos");
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