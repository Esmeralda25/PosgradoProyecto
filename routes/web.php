<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GeneracionController;
use App\Http\Controllers\PeriodosController;
use App\Http\Controllers\RubricaController;
use App\Http\Controllers\CriteriosController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CompromisosController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EvaluarController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\HistoricorevController;
use App\Http\Controllers\AdminController;






Route::get('/', function () {
    return view('welcome');
});


Route::post('entrada', [EntradaController::class, 'validar'])->name('entrada.validar');
Route::get('logout', [EntradaController::class, 'logout'])->name('entrada.salida');;

Route::resource('info', InfoController::class);

Route::resource('programas', PesController::class);


//------------------------USUARIO COORDINADOR-------------------------
Route::resource('coordinadores', UserController::class);
Route::get('manual', [UserController::class, 'manual']);

//opcion: Usuarios
Route::get('listar-usuarios', [UserController::class, 'listarUsuarios']);//->middleware('coordina');
Route::get('agregar-usuarios', [UserController::class, 'agregarUsuarios']);
Route::post('agregar-usuarios', [UserController::class, 'store']);
Route::get('editar-usuarios/{tipo}/{id}', [UserController::class, 'editarUsuario']);
Route::put('actualizar-usuarios/{tipo}/{id}', [UserController::class, 'actualizarUsuario']);
Route::delete('eliminar-usuarios/{tipo}/{id}', [UserController::class, 'eliminarUsuario']);

Route::get('editar-contraseñas/{tipo}/{id}', [UserController::class, 'UserController@password']);
Route::put('actualizar-contraseñas/{tipo}/{id}', [UserController::class, 'UserController@guardarPassword']);



Route::get('listar-proyectos', [UserController::class, 'listarProyectos']);
Route::get('asignar-comite/{id_proyecto}', [UserController::class, 'asignarComite']);
Route::put('asignar-comite/{id}', [UserController::class, 'actualizarComite']);


//opcion: Generaciones
Route::resource('generaciones', GeneracionController::class);
Route::get('listar-generaciones', [GeneracionController::class, 'index']);
Route::get('agregar-generaciones', [GeneracionController::class, 'create']);
Route::post('guardar-generaciones', [GeneracionController::class, 'store']);
Route::get('editar-generaciones/{id}', [GeneracionController::class, 'edit']);
Route::put('actualizar-generaciones/{id}', [GeneracionController::class, 'update']);
Route::delete('eliminar-generaciones/{id}', [GeneracionController::class, 'destroy']);


//opcion: Periodos
Route::get('periodos/{id}', [PeriodosController::class, 'index']);
Route::get('agregar-periodos/{id}', [PeriodosController::class, 'create']);
Route::post('guardar-periodos', [PeriodosController::class, 'store']);
Route::get('editar-periodos/{id}', [PeriodosController::class, 'edit']);
Route::put('actualizar-periodos/{id}', [PeriodosController::class, 'update']);
Route::get('estadisticos', [PeriodosController::class, 'estadistico']);
Route::delete('borrar-periodos/{id}', [PeriodosController::class, 'destroy']);

//opcion: Rubricas
Route::resource('rubricas', RubricaController::class);
Route::get('agregar-rubricas', [RubricaController::class, 'create']);
Route::post('guardar-rubricas', [RubricaController::class, 'store']);
Route::get('editar-rubricas/{id}', [RubricaController::class, 'edit']);
Route::put('actualizar-rubricas/{id}', [RubricaController::class, 'update']);
Route::get('mostrar-rubricas/{id}', [RubricaController::class, 'show']);

//opcion: Criterios
Route::get('criterios/{id}', [CriteriosController::class, 'index']);
Route::get('agregar-criterios/{id}', [CriteriosController::class, 'create']);
Route::post('guardar-criterios', [CriteriosController::class, 'store']);
Route::get('editar-criterios/{id}', [CriteriosController::class, 'edit']);
Route::put('actualizar-criterios/{id}', [CriteriosController::class, 'update']);
Route::delete('borrar-criterios/{id}', [CriteriosController::class, 'destroy']);


//opcion: Compromisos
Route::resource('Compromisos', CompromisosController::class);
Route::put('compromisos/{id}', [UserController::class, 'actualizarCompromiso']);
Route::get('listar-compromisos', [CompromisosController::class, 'index']);
Route::get('agregarCompromisos', [CompromisosController::class, 'create']);
Route::post('guardarCompromisos', [CompromisosController::class, 'store']);
Route::get('editarCompromisos/{id}', [CompromisosController::class, 'edit']);


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
