<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Adscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function add(){
        return view('coordinador.add');
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
            echo "agregar estudiante";
            Estudiante::insert($estudiante);

        }else($request->input('nivel')=="Docente"){
            
            if($docente->nombre == $docente){
                echo "Este usuario ya existe";
                Docente::insert($adscripcion);
            }

            else($docente->nombre != $docente){
                echo "usuario agregado"
                Docente::insert($docente);
                Docente::insert($adscripcion);

            }
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

    
    public function edit($id)
    {
        $estudiante= Estudiante::find($id);
        return view('coordinador.edit')->with('estudiante',$estudiante);

        $docente= Docente::find($id);
        return view('coordinador.edit')->with('docente',$docente);
    }

    public function update(Request $request, $id)
    {
        $estudiante = request()->except('_token');
        $docente = request()->except('_token');

        $registro = Estudiante::find($id);
        $registro->fill($estudiante);
        $registro->save();
        return redirect("/add");

        $registro = Docente::find($id);
        $registro->fill($docente);
        $registro->save();
        return redirect("/add");
        
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
}
