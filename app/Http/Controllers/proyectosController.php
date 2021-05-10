<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\proyecto;
use App\Http\Requests\proyectosRequest;

class proyectosController extends Controller
{

public function index(){

    return view('estudiante.create');
}
    

    public function Store(proyectosRequest $request){
        dd($request);

    } 

}