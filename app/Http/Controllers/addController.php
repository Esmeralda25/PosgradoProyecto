<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addController extends Controller
{
    public function index(){
       
        return view('coordinador.add');
    }
}
