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
//Informatico
//verificar-declaraciones en route _ se comento la ruta original de pes
//Route::prefix('pe')->group(function (){
  //  Route::resource('pes', 'App\Http\Controllers\PesController');
    //Route::get('pes/{id}/destroy',[
    //'uses' => 'PesController@destroy',
    //'as' => 'pes.destroy'
    //]);
//});

//Route::resource('pes', 'App\Http\Controllers\PesController');
//con esta ruta puedo acceder a todos los metodos, creando instantaneamente una url para cada una(los metodos que esten en ese controlador)
Route::resource('pes', PesController::class);


//Estudiante

Route::resource('estudiantes', 'App\Http\Controllers\estudianteController');

Route::resource('proyectos', 'App\Http\Controllers\proyectosController');
//Route::resource('asignar', 'App\Http\Controllers\asignarController');
Route::get('asignar-asesores/{id_proyecto}','App\Http\Controllers\proyectosController@asignarAsesores' );
//nota:  componer las rutas, aplicar convenciones en todo el sistema

Route::post('proyectos','App\Http\Controllers\proyectosController@Store');

Route::resource('reportes', 'App\Http\Controllers\reportarController');

Route::resource('mainestudiantes', 'App\Http\Controllers\mainestudiante2Controller');



//Coordinador->index(listar), sotre(guardar), create, show, edit, update, delete
Route::get('editar-usuarios/{tipo}/{id}','App\Http\Controllers\coordinadorController@editarLista');
Route::put('actualizar-usuarios/{tipo}/{id}','App\Http\Controllers\coordinadorController@actualizarLista');

Route::resource('coordinadores', 'App\Http\Controllers\coordinadorController');

Route::get('usuarios', 'App\Http\Controllers\coordinadorController@agregarUsuarios');

Route::get('agregar', 'App\Http\Controllers\coordinadorController@create');
Route::post('add', 'App\Http\Controllers\coordinadorController@store');

Route::get('editar-contraseñas/{tipo}/{id}','App\Http\Controllers\coordinadorController@password');
Route::put('actualizar-contraseñas/{tipo}/{id}','App\Http\Controllers\coordinadorController@guardarPassword');

//Generaciones
Route::resource('generaciones','App\Http\Controllers\GeneracionController');
Route::get('agregarGeneraciones','App\Http\Controllers\GeneracionController@create');
Route::post('guardarGeneraciones','App\Http\Controllers\GeneracionController@store');
Route::get('editarGeneraciones/{id}','App\Http\Controllers\GeneracionController@edit');
Route::put('actualizarGeneraciones/{id}','App\Http\Controllers\GeneracionController@update');

//Periodos
Route::get('periodos/{id}','App\Http\Controllers\PeriodosController@index');
Route::get('agregar-periodos/{id}','App\Http\Controllers\PeriodosController@create');
Route::post('guardar-periodos','App\Http\Controllers\PeriodosController@store');
Route::get('editar-periodos/{id}','App\Http\Controllers\PeriodosController@edit');
Route::get('estadisticos','App\Http\Controllers\PeriodosController@estadistico');

// Rubricas
Route::resource('rubricas', 'App\Http\Controllers\RubricaController');
Route::get('agregar-rubricas','App\Http\Controllers\RubricaController@create');
Route::post('guardar-rubricas','App\Http\Controllers\RubricaController@store');
Route::get('editar-rubricas/{id}','App\Http\Controllers\RubricaController@edit');
Route::put('actualizar-rubricas/{id}','App\Http\Controllers\RubricaController@update');
Route::get('mostrar-rubricas/{id}','App\Http\Controllers\RubricaController@show');

//Criterios
Route::get('criterios/{id}','App\Http\Controllers\CriteriosController@index');
Route::get('agregar-criterios/{id}','App\Http\Controllers\CriteriosController@create');
Route::post('guardar-criterios','App\Http\Controllers\CriteriosController@store');

Route::resource('criterios', 'App\Http\Controllers\criterioController');

//Compromisos
Route::resource('Compromisos', 'App\Http\Controllers\CompromisosController');
Route::get('agregarCompromisos','App\Http\Controllers\CompromisosController@create');
Route::post('guardarCompromisos','App\Http\Controllers\CompromisosController@store');
Route::get('editarCompromisos/{id}','App\Http\Controllers\CompromisosController@edit');
Route::put('actualizarCompromisos/{id}','App\Http\Controllers\CompromisosController@update');

Route::resource('compromisos', 'App\Http\Controllers\compromisosadquiridosController');








Route::resource('estadisticos', 'App\Http\Controllers\estadisticoController');


Route::resource('asesores', 'App\Http\Controllers\asesorController');
Route::resource('asignaciones', 'App\Http\Controllers\asignarController');

//Docente 

Route::resource('docentes', 'App\Http\Controllers\docenteController');

Route::resource('evaluaciones', 'App\Http\Controllers\evaluarController');

Route::resource('historicos', 'App\Http\Controllers\historicoController');

Route::resource('historicorevs', 'App\Http\Controllers\historicorevController');



Route::resource('cuentaAdmins', 'App\Http\Controllers\cuentaAdminController');

//Route::resource('loges', 'App\Http\Controllers\loginController');

//Route::resource('estumains', 'App\Http\Controllers\estudiantemainController');



Route::post('entrada','App\Http\Controllers\entradaController@validar'); 
Route::get('logout', 'App\Http\Controllers\entradaController@logout');


Route::get('/prueba', function () {
    echo Hash::make( 'paso' );
});
