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

Route::resource('compromisos', 'App\Http\Controllers\compromisosadquiridosController');

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
Route::get('generaciones','App\Http\Controllers\coordinadorController@generaciones');
Route::get('agregarGeneraciones','App\Http\Controllers\coordinadorController@agregarGeneraciones');
Route::post('guardarGeneraciones','App\Http\Controllers\coordinadorController@guardarGeneraciones');
Route::get('editarGeneraciones/{id}','App\Http\Controllers\coordinadorController@editarGeneraciones');
Route::put('actualizarGeneraciones/{id}','App\Http\Controllers\coordinadorController@actualizarGeneraciones');

//Periodos
Route::get('periodos/{id}','App\Http\Controllers\coordinadorController@periodos');
Route::get('agregar-periodos/{id}','App\Http\Controllers\coordinadorController@crearPeriodos');
Route::post('guardar-periodos','App\Http\Controllers\coordinadorController@guardarPeriodos');
//el coordinador puede seleccionar  a sus docentes.



Route::resource('rubricas', 'App\Http\Controllers\rubricaController');

Route::resource('criterios', 'App\Http\Controllers\criterioController');

Route::resource('addcompromisos', 'App\Http\Controllers\addCompromisosController');


Route::resource('estadisticos', 'App\Http\Controllers\estadisticoController');


Route::resource('asesores', 'App\Http\Controllers\asesorController');
Route::resource('asignaciones', 'App\Http\Controllers\asignarController');

//Docente

Route::resource('docentes', 'App\Http\Controllers\docenteController');

Route::resource('evaluaciones', 'App\Http\Controllers\evaluarController');

Route::resource('historicos', 'App\Http\Controllers\historicoController');

Route::resource('historicorevs', 'App\Http\Controllers\historicorevController');



Route::resource('cuentaAdmins', 'App\Http\Controllers\cuentaAdminController');

Route::resource('loges', 'App\Http\Controllers\loginController');

//Route::resource('estumains', 'App\Http\Controllers\estudiantemainController');



Route::post('entrada','App\Http\Controllers\entradaController@validar');


Route::get('/prueba', function () {
    echo Hash::make( 'paso' );
});
