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
use App\Http\Controllers\CompromisoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EvaluarController;
use App\Http\Controllers\TableroController;
use App\Http\Controllers\AdquiridoController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AdscripcionController;

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
//Adscripciones
Route::resource('adscripciones', AdscripcionController::class);

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
//aqui falta inscribir estudiantes...

Route::resource('periodos', PeriodoController::class)->except(['index','create']);;

//Compromisos
Route::resource('compromisos', CompromisoController::class);

//proyectos(asignar comite)

Route::get('proyectos/listar', [ProyectoController::class, 'listarProyectos'])->name('proyectos.sincomite');
Route::get('proyectos/asignar-comite/{id_proyecto}', [ProyectoController::class, 'asignarComite'])->name('proyectos.asignarGet');
Route::put('proyectos/asignar-comite/{id_proyecto}', [ProyectoController::class, 'asignarComitePut'])->name('proyectos.asignarPut');
//una cosa es asignar y otra es cambiar, tengo que hacer las rutas y copiar y pegar el blade




/// Estudiante
//Route::get('inicio', [TableroController::class ,'inicio'])->name('inicio');

//Route::resource('estudiantes', EstudianteController::class);

//Route::resource('proyectos', ProyectoController::class)->except(['index',destroy']) ;

Route::get('proyectos/registrar', [ProyectoController::class,'create'])->name('proyectos.create');
Route::post('proyectos/registrar', [ProyectoController::class,'store'])->name('proyectos.store');
Route::get('proyectos/{proyecto}/edit', [ProyectoController::class,'edit'])->name('proyectos.edit');
Route::put('proyectos/{proyecto}', [ProyectoController::class,'update'])->name('proyectos.update');
Route::get('proyectos/{proyecto}', [ProyectoController::class,'show'])->name('proyectos.show');


Route::get('proyectos/comprometerse', [ProyectoController::class,'comprometerse'])->name('proyectos.comprometerse');

Route::put('compromiso-adquirido', [AdquiridoController::class,'compromisoAdquirido'])->name('compromisos.adquirir');
Route::put('actividad-agendada', [ActividadController::class,'agendar'])->name('actividades.agendar');
Route::delete('eliminar-compromiso/{compromiso}', [AdquiridoController::class,'destroy'])->name('compromisos.eliminar');
Route::delete('eliminar-actividad/{actividad}', [ActividadController::class,'destroy'])->name('actividades.eliminar');


Route::get('proyectos/reportar', [ProyectoController::class,'reportar'])->name('proyectos.reportar');
Route::post('proyectos/reportar', [AdquiridoController::class,'guardarReporte'])->name('proyectos.guardarReporte');

Route::get('mostrar-calificacionesEs/{id}', [EstudianteController::class,'show']);

///Docente 


//Docente Evaluaciones
Route::get('proyectos/evaluar/{proyecto}', [EvaluarController::class, 'create'])->name('proyectos.evaluar');
Route::post('guardar-calificaciones', [EvaluarController::class, 'store'])->name('proyectos.calificaiones');

Route::get('proyectos/historico/{proyecto}', [EvaluarController::class, 'show'/*'show' */])->name('proyectos.historico');

Route::get('proyectos/avance/{proyecto}', [EvaluarController::class, 'porcentaje'])->name('proyectos.avance');
Route::put('proyectos/avance/{proyecto}', [EvaluarController::class, 'guardarAvance'])->name('proyectos.guardarAvance');
