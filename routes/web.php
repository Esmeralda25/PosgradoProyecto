<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GeneracionController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\RubricaController;
use App\Http\Controllers\CriterioController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CompromisosController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EvaluarController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\HistoricorevController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TableroController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::post('entrada', [EntradaController::class, 'validar'])->name('entrada.validar');
Route::get('logout', [EntradaController::class, 'logout'])->name('entrada.salida');;
Route::get('info', [InfoController::class, 'index'])->name('info');
Route::get('manuales', [UserController::class, 'manual'])->name('manuales'); //no funciona esta ruta

Route::get('inicio', [TableroController::class ,'inicio'])->name('inicio');


///INFORMATICO
//no tiene inicio puesto que es lo unico que hace, pero falta otras opciones que seran mas modulos
Route::resource('programas', PeController::class);

/// COORDINADOR
    //Route::get('coordinadores', [TableroController::class ,'coordinadores'])->name('coordinadores');
//Docentes
Route::resource('docentes', DocenteController::class);
//Rubricas
Route::resource('rubricas', RubricaController::class);
//-Criterios
Route::get('criterios/create/{rubrica_id}', [CriterioController::class, 'create'])->name('criterios.create');
Route::get('criterios/{rubrica_id}', [CriterioController::class, 'index'])->name('criterios.index');
Route::resource('criterios', CriterioController::class)->except(['index','create']);

//Generaciones
Route::resource('generaciones', GeneracionController::class);
//-Periodos
Route::get('periodos/cambiar-comite/{id_proyecto}', [PeriodoController::class, 'cambiarComite'])->name('periodos.cambiarGet');
Route::put('periodos/cambiar-comite/{id_proyecto}', [PeriodoController::class, 'cambiarComitePut'])->name('periodos.cambiarPut');
Route::get('periodos/create/{geneacion}', [PeriodoController::class, 'create'])->name('periodos.create');
Route::get('periodos/{periodo}/proyectos', [PeriodoController::class, 'proyectos'])->name('periodos.proyectos');
Route::get('periodos/{geneacion}', [PeriodoController::class, 'index'])->name('periodos.index');
Route::get('estadisticos', [PeriodoController::class, 'estadistico'])->name('periodos.estadisticos');

Route::resource('periodos', PeriodoController::class)->except(['index','create']);;

//Compromisos
Route::resource('compromisos', CompromisosController::class);

//proyectos(asignar comite)

Route::get('proyectos/listar', [ProyectoController::class, 'listarProyectos'])->name('proyectos.sincomite');
Route::get('proyectos/asignar-comite/{id_proyecto}', [ProyectoController::class, 'asignarComite'])->name('proyectos.asignarGet');
Route::put('proyectos/asignar-comite/{id_proyecto}', [ProyectoController::class, 'asignarComitePut'])->name('proyectos.asignarPut');
//una cosa es asignar y otra es cambiar, tengo que hacer las rutas y copiar y pegar el blade

//USUARIO Estudiante
Route::resource('estudiantes', EstudianteController::class);
Route::get('mostrar-calificacionesEs/{id}', [EstudianteController::class,'show']);

Route::get('registrar', [ProyectoController::class,'registrar']);
Route::post('registrar', [ProyectoController::class,'store']);
Route::get('seguimiento', [ProyectoController::class,'show']);
Route::get('comprometerse', [ProyectoController::class,'edit']);
Route::put('comprometerse', [ProyectoController::class,'update']);
Route::delete('comprometerse/{id}', [ProyectoController::class,'destroy']);

Route::get('comprometerse-act', [ProyectoController::class,'edit']);
Route::put('comprometerse-act', [ProyectoController::class,'update']);
Route::delete('comprometerse-act/{id}', [ProyectoController::class,'destroy']);


Route::get('reportar', [ProyectoController::class,'reportar']);
Route::post('reportar', [ProyectoController::class,'guardarReporte']);


//Docente 

Route::resource('docentes', DocenteController::class);

//Docente Evaluaciones
Route::get('evaluaciones/{id}', [EvaluarController::class, 'index']);
Route::post('guardar-calificaciones', [EvaluarController::class, 'store']);
Route::get('mostrar-calificaciones/{id}', [EvaluarController::class, 'show']);
Route::get('conceptos/{id}', [EvaluarController::class, 'conceptos']);
Route::get('porcentaje-proyectos/{id}', [EvaluarController::class, 'porcentaje']);
Route::put('guardar-porcentajes', [EvaluarController::class, 'guardarPorcentajes']);
Route::get('doc-compromisos/{id}', [EvaluarController::class, 'verCompromisos']);
Route::get('doc-reportes/{id}', [EvaluarController::class, 'verReportes']);
Route::get('promedios-semestrales/{id}', [EvaluarController::class, 'promedioSemestrales']);


Route::get('historicos', [HistoricoController::class,'index']);

Route::resource('historicorevs', HistoricorevController::class);

Route::resource('cuentaAdmins', AdminController::class);


Route::get('/prueba', function () {
    echo public_path('evidencias');
});
