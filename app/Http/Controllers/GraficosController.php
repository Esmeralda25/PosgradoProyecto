<?php

namespace App\Http\Controllers;
use App\Models\Evaluacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GraficosController extends Controller
{
    public function index(){
        $gevaluacion = Evaluacion::select (DB::raw("COUNT(*)as count"))
        ->whereYear('fecha' , date('Y'))
        ->groupBy(DB::raw("calificaciones"))
        ->pluck('count');
    }
}
