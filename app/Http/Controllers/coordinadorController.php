<?php

namespace App\Http\Controllers;
use App\Models\Estudiantemain;
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
        Estudiante::insert($estudiante);

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
