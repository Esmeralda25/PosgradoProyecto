<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{   
    public function index()
    {
        //PLANTILLA DONDE EL ESTUDIANTE AGREGA PROYECTO
        
        $docente = $login::all();
        return view('coordinador.add', compact('docente'));//->with('add',$add);
    }

    
    public function create()
    {
            return view('coordinador.create');
        
    }

    
    public function store(Request $request)
    {
        $valores=$request->all();
        if($valores['password']!=$valores['password2'])
            return redirect()->back()->with('error', 'EL PASSWORD ES INCORRECTO');
            $valores['password']=Hash::make($valores['password']);
            $registro = new docente();
            $registro->fill($valores);
            $registro->save();
            return redirect("/add")->with('mensaje','USUARIO AGREGADO CORRECTAMENTE');
    }

   
    public function show($id)
    {
        $docente = $login::find($id);
        return view('coordinador.add', compact('docente'));

    }

    
    public function edit($id)
    {
        $docente = $login::find($id);
        return view('coordinador.edit', compact('docente'));
    }

    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        //
    }

    
    public function validar (Request $peticion){
        switch ($peticion->input('nombre')) {
            case 'coordinador': 
               return redirect('coordinador');
                break;

            case 'estudiante':
                return redirect('estumain');
                break;
            case 'docente':
                return redirect('docente');
                break;
            
            default:
                # code...
                break;
        }

    }
    
}
