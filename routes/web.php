<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});




Route::post('entrada','App\Http\Controllers\EntradaController@validar'); 
Route::get('logout', 'App\Http\Controllers\EntradaController@logout');
Route::resource('info', 'App\Http\Controllers\InfoController');

Route::resource('pes', PesController::class);


//USUARIO COORDINADOR
//no todo es resources......
Route::resource('coordinadores', 'App\Http\Controllers\CoordinadorController');
Route::get('manual', 'App\Http\Controllers\CoordinadorController@manual');
//-----------------------------------------

/*crud
listar-
agregar-
agregar-
mostrar-
actualizar-
actualizar-
eliminar-
*/

//opcion: Usuarios
Route::get('listar-usuarios', 'App\Http\Controllers\coordinadorController@listarUsuarios'); //muestra la lista de usuarios
Route::get('agregar-usuarios', 'App\Http\Controllers\coordinadorController@agregarUsuarios');
//Route::get('historico', 'App\Http\Controllers\coordinadorController@historicoCoordinador');//historico docente

Route::post('agregar-usuarios', 'App\Http\Controllers\coordinadorController@store');
Route::get('editar-usuarios/{tipo}/{id}','App\Http\Controllers\coordinadorController@editarUsuario');
Route::put('actualizar-usuarios/{tipo}/{id}','App\Http\Controllers\coordinadorController@actualizarUsuario');
Route::delete('eliminar-usuarios/{tipo}/{id}','App\Http\Controllers\coordinadorController@eliminarUsuario');
 
Route::get('editar-contraseñas/{tipo}/{id}','App\Http\Controllers\coordinadorController@password'); //funciona la ñ pero no es insternacional en lugar de la palabra contraseña pon password
Route::put('actualizar-contraseñas/{tipo}/{id}','App\Http\Controllers\coordinadorController@guardarPassword');

//opcion: Proyectos
    //Route::resource('asesores', 'App\Http\Controllers\asesorController');
    //si lo manejas como resource deberia de ser proyectos - un resource puede tener otras rutas....
    //Route::resource('asignaciones', 'App\Http\Controllers\asignarController'); //ademas el asignarController solo tiene un metodo el index porque lo pones en un resource te crea las otras rutas y no hay donde manejarlas.

Route::get('listar-proyectos', 'App\Http\Controllers\proyectosController@listarProyectos'); //debería ser ProyectoController (es PascalCase y viene del nombre del modelo que debe ser Proyecto en singular)
Route::get('asignar-comite/{id_proyecto}','App\Http\Controllers\proyectosController@asignarComite' );
Route::put('asignar-comite/{id}',['App\Http\Controllers\coordinadorController' , 'actualizarComite']);
//Route::put('comites/{id}','App\Http\Controllers\coordinadorController@actualizarComite');


//opcion: Generaciones
Route::resource('generaciones','App\Http\Controllers\GeneracionController');
Route::get('listar-generaciones','App\Http\Controllers\GeneracionController@index');
Route::get('agregar-generaciones','App\Http\Controllers\GeneracionController@create');
Route::post('guardar-generaciones','App\Http\Controllers\GeneracionController@store');
Route::get('editar-generaciones/{id}','App\Http\Controllers\GeneracionController@edit');
Route::put('actualizar-generaciones/{id}','App\Http\Controllers\GeneracionController@update');
Route::delete('eliminar-generaciones/{id}','App\Http\Controllers\GeneracionController@destroy');


//opcion: Periodos
Route::get('periodos/{id}','App\Http\Controllers\PeriodosController@index');
Route::get('agregar-periodos/{id}',['App\Http\Controllers\PeriodosController','create']);
Route::post('guardar-periodos','App\Http\Controllers\PeriodosController@store');
Route::get('editar-periodos/{id}','App\Http\Controllers\PeriodosController@edit');
Route::put('actualizar-periodos/{id}','App\Http\Controllers\PeriodosController@update');
Route::get('estadisticos','App\Http\Controllers\PeriodosController@estadistico');
Route::delete('borrar-periodos/{id}','App\Http\Controllers\PeriodosController@destroy');

//opcion: Rubricas
Route::resource('rubricas', 'App\Http\Controllers\RubricaController');
Route::get('agregar-rubricas','App\Http\Controllers\RubricaController@create');
Route::post('guardar-rubricas','App\Http\Controllers\RubricaController@store');
Route::get('editar-rubricas/{id}','App\Http\Controllers\RubricaController@edit');
Route::put('actualizar-rubricas/{id}','App\Http\Controllers\RubricaController@update');
Route::get('mostrar-rubricas/{id}','App\Http\Controllers\RubricaController@show');

//opcion: Criterios
Route::get('criterios/{id}','App\Http\Controllers\CriteriosController@index');
Route::get('agregar-criterios/{id}','App\Http\Controllers\CriteriosController@create');
Route::post('guardar-criterios','App\Http\Controllers\CriteriosController@store');
Route::get('editar-criterios/{id}',['App\Http\Controllers\CriteriosController','edit']);
Route::put('actualizar-criterios/{id}','App\Http\Controllers\CriteriosController@update');
Route::delete('borrar-criterios/{id}','App\Http\Controllers\CriteriosController@destroy');


//opcion: Compromisos
Route::put('compromisos/{id}','App\Http\Controllers\coordinadorController@actualizarCompromiso');
Route::get('listar-compromisos',['App\Http\Controllers\CompromisosController' , 'index' ]);
Route::resource('Compromisos', 'App\Http\Controllers\CompromisosController');
Route::get('agregarCompromisos','App\Http\Controllers\CompromisosController@create');
Route::post('guardarCompromisos','App\Http\Controllers\CompromisosController@store');
Route::get('editarCompromisos/{id}','App\Http\Controllers\CompromisosController@edit');
    //Route::resource('compromisos', 'App\Http\Controllers\compromisosadquiridosController'); //no creo que sirva es un controlador que solo tiene un metodo

/*
como debieron cambiar esto?
Route::resource('estadisticos', 'App\Http\Controllers\estadisticoController');
*/

//USUARIO Estudiante
Route::resource('estudiantes', 'App\Http\Controllers\EstudianteController');
//Route::resource('estudiantes', 'App\Http\Controllers\EstudianteController@estatusAlumno');

Route::get('mostrar-calificacionesEs/{id}','App\Http\Controllers\EstudianteController@show');

Route::get('registrar','App\Http\Controllers\proyectosController@registrar');
Route::post('registrar','App\Http\Controllers\proyectosController@store');
Route::get('seguimiento','App\Http\Controllers\proyectosController@show');
Route::get('comprometerse','App\Http\Controllers\proyectosController@edit');
Route::put('comprometerse','App\Http\Controllers\proyectosController@update');
Route::delete('comprometerse/{id}','App\Http\Controllers\proyectosController@destroy');
 
Route::get('comprometerse_act','App\Http\Controllers\proyectosController@edit');
Route::put('comprometerse_act','App\Http\Controllers\proyectosController@update');
Route::delete('comprometerse_act/{id}','App\Http\Controllers\proyectosController@destroy');


Route::get('reportar','App\Http\Controllers\proyectosController@reportar');
Route::post('reportar','App\Http\Controllers\proyectosController@guardarReporte');


//Docente 

Route::resource('docentes', 'App\Http\Controllers\DocenteController');

//Docente Evaluaciones
Route::get('evaluaciones/{id}', 'App\Http\Controllers\EvaluarController@index');
Route::post('guardar-calificaciones','App\Http\Controllers\EvaluarController@store');
Route::get('mostrar-calificaciones/{id}','App\Http\Controllers\EvaluarController@show');
Route::get('conceptos/{id}','App\Http\Controllers\EvaluarController@conceptos');
Route::get('porcentaje-proyectos/{id}','App\Http\Controllers\EvaluarController@porcentaje');
Route::put('guardar-porcentajes','App\Http\Controllers\EvaluarController@guardarPorcentajes');
Route::get('doc-compromisos/{id}','App\Http\Controllers\EvaluarController@verCompromisos');
Route::get('doc-reportes/{id}','App\Http\Controllers\EvaluarController@verReportes');
Route::get('promedios-semestrales/{id}','App\Http\Controllers\EvaluarController@promedioSemestrales');


Route::get('historicos', 'App\Http\Controllers\HistoricoController@index');

Route::resource('historicorevs', 'App\Http\Controllers\HistoricorevController');



Route::resource('cuentaAdmins', 'App\Http\Controllers\AdminController');

//Route::resource('loges', 'App\Http\Controllers\LoginController');

//Route::resource('estumains', 'App\Http\Controllers\estudiantemainController');






Route::get('/prueba', function () {
    echo public_path('evidencias');
});
