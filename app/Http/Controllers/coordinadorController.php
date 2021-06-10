<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Adscripcion;
use App\Models\Generacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class coordinadorController extends Controller
{
    public function index()
    {
        //PLANTILLA DONDE EL ESTUDIANTE AGREGA PROYECTO
        $usuario = \Session::get('usuario');
       //echo "entra coordinador: $usuario->id";
       return view('coordinador.index');//->with('add',$add);
        //return view('coordinador.index');//->with('add',$add);
    }

    public function agregarUsuarios(){
        $coordinador = \Session::get('usuario');

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
/*
 "SELECT nombre FROM estudiantes where pes_id = 5"
 UNION
 "SELECT nombre FROM docentes where id in (select docentes_id where pes_id = 5 )"

*/



        return view('coordinador.add',compact('usuarios'));
    }

    public function create()
    {
            return view('coordinador.create');
        
    }

    

    public function store(Request $request)
    {
        $estudiante = request()->except('_token');
        $docente = request()->except('_token');
        $adscripcion = $request->all();

        if($request->input('nivel')=="Estudiante"){
            //echo "agregar estudiante";
            Estudiante::insert($estudiante);

        }elseif($request->input('nivel')=="Docente"){
            
            /*
            if($docente->nombre == $docente){
                echo "Este usuario ya existe";
                Docente::insert($adscripcion);
            }

            else($docente->nombre != $docente){
                echo "usuario agregado"
                Docente::insert($docente);
                Docente::insert($adscripcion);

            }
            */
        }
        return;
        return redirect('coordinador.add');

        //Estudiante::create($request->only('nombre','correo')
        //+[
        //    'password' => bcrypt($request->input(password))
        //]);
        //return redirect()->back();

        //Docente::create($request->only('nombre','correo')
        //+[
        //    'password' => bcrypt($request->input(password))
        //]);
        //return redirect()->back();
    }

   
    public function show($id)
    {
        
    }

    
    public function editarLista($tipo, $id)
    {

        if ($tipo == "Estudiante"){
            $estudiante= Estudiante::find($id);
            return view('coordinador.edit-estudiante')->with('estudiante',$estudiante);  
        }else{
            $docente= Docente::find($id);
            return view('coordinador.edit-docente')->with('docente',$docente);    
        }

    }

    public function actualizarLista(Request $request, $tipo, $id)
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

        return redirect("/usuarios"); //debe informar que paso

    }

    
    public function destroy($id)
    {
        try{
            Estudiante::destroy($id);
            return redirect('add');
        } catch (\Throwable $th) {
            return redirect('add');
        }

        try{
            Docente::destroy($id);
            return redirect('add');
            echo 'Usuario borrado correctamente';
        } catch (\Throwable $th) {
            return redirect('add');
            echo 'El usuario no se pudo borrar, verifiue de nuevo';
        }
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

    /*public function guardarPassword(Request $request, $tipo, $id){

        if ($tipo == "Estudiante"){
        
            $rules = [
                'password' => 'required',
            ];
            
            $messages = [
                'password.required' => 'El campo es requerido',
            ];
                if (Hash::check($request->password, Auth::user()->password)){
                    $user = new User;
                    $user->where('correo', '=', Auth::user()->email)
                         ->update(['password' => bcrypt($request->password)]);
                    return redirect('/usuarios')->with('status', 'Contraseña cambiada con éxito');
                }
                else
                {
                    return redirect('/password')->with('message', 'Campo incorrecto');
                }
            }else{
                $rules = [
                    'password' => 'required',
                ];
                
                $messages = [
                    'password.required' => 'El campo es requerido',
                ];
                    if (Hash::check($request->password, Auth::user()->password)){
                        $user = new User;
                        $user->where('correo', '=', Auth::user()->correo)
                             ->update(['password' => bcrypt($request->password)]);
                        return redirect('/usuarios')->with('status', 'Contraseña cambiada con éxito');
                    }
                    else
                    {
                        return redirect('/password')->with('message', 'Campo incorrecto');
                    }
            }

    

        }*/

        public function generaciones(){
            $generaciones = \DB::table('generaciones')
            ->get();
            return view('coordinador.generacion.index',compact('generaciones',$generaciones));
        }

        public function agregarGeneraciones(){
            return view('coordinador.generacion.create');   
        }

        public function guardarGeneraciones(Request $request){
            generacion::create(request()->all());
            return redirect('/generaciones');
        }

        public function editarGeneraciones($id){
            $generacion = Generacion::find($id);
            return view('coordinador.generacion.edit')->with('generacion',$generacion);
        }

        /*public function actualizarGeneraciones(Request $request, $id){
            $generacion = $request->all();
            $registro = Generacion::find($id);
    
            $registro->fill($generacion);
    
            $registro->save();
            return redirect("/generaciones");
    }*/

}