<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('pes', 'App\Http\Controllers\PesController');

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

//Coordinador
Route::resource('coordinadores', 'App\Http\Controllers\coordinadorController');
//el coordinador puede seleccionar  a sus docentes.


Route::resource('generaciones', 'App\Http\Controllers\generacionController');

Route::resource('periodos', 'App\Http\Controllers\periodoController');

Route::resource('rubricas', 'App\Http\Controllers\rubricaController');

Route::resource('addusuarios', 'App\Http\Controllers\addController');

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

Route::resource('estumains', 'App\Http\Controllers\estudiantemainController');



Route::post('entrada','App\Http\Controllers\entradaController@validar');


Route::get('/prueba', function () {
    echo Hash::make( 'paso' );
});
