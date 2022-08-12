<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TableroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coordinadores()
    {
        $usuario = \Session::get('usuario');
        $usuario = $usuario->fresh();
       return view('coordinador.index')->with('pe',$usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
}

