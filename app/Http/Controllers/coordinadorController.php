<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
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
        
        //detalle agregar segun le corresponda
        if($request->input('nivel')=="Estudiante"){
            echo "agregar estudiante";
            //Estudiante::insert($estudiante);

        }else{
            //docente
            echo "si ya existe entonces solo le3 agregas su adscripcion";
            echo "si, es nuevo y tienes que agregarlo en 2 tablas en 'docentes' y en 'adscripciones'";
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
    }

    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        //
    }
}
