<?php

namespace App\Http\Controllers;
use App\Models\estudiantemain;
use Illuminate\Http\Request;

class coordinadorController extends Controller
{
    public function index()
    {
        //PLANTILLA DONDE EL ESTUDIANTE AGREGA PROYECTO
        return view('coordinador.index');//->with('add',$add);
    }

    
    public function create()
    {
            return view('coordinador.create');
        
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        //
    }
}
