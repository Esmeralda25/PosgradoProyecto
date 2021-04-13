<?php

namespace App\Http\Controllers;
use App\Models\estudiantemain;
use Illuminate\Http\Request;

class estudiantemainController extends Controller
{
    public function index()
    {
        //$add = Add::all();
        return view('layouts.plantillaestudiantemain');//->with('add',$add);
    }

    
    public function create()
    {
        
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
