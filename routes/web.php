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

Route::resource('estudiante', 'App\Http\Controllers\estudianteController');

Route::resource('reportar', 'App\Http\Controllers\reportarController');

Route::resource('mainestudiante2', 'App\Http\Controllers\mainestudiante2Controller');

Route::resource('compromisos', 'App\Http\Controllers\compromisosadquiridosController');

//Coordinador
Route::resource('coordinador', 'App\Http\Controllers\coordinadorController');

Route::resource('generacion', 'App\Http\Controllers\generacionController');

Route::resource('periodo', 'App\Http\Controllers\periodoController');

Route::resource('rubrica', 'App\Http\Controllers\rubricaController');

Route::resource('addusuario', 'App\Http\Controllers\addController');

Route::resource('criterio', 'App\Http\Controllers\criterioController');

Route::resource('addcompromisos', 'App\Http\Controllers\addCompromisosController');

Route::resource('asignar', 'App\Http\Controllers\asignarController');

Route::resource('estadistico', 'App\Http\Controllers\estadisticoController');
//Docente

Route::resource('docente', 'App\Http\Controllers\docenteController');

Route::resource('evaluar', 'App\Http\Controllers\evaluarController');

Route::resource('historico', 'App\Http\Controllers\historicoController');

Route::resource('historicorev', 'App\Http\Controllers\historicorevController');



Route::resource('cuentaAdmin', 'App\Http\Controllers\cuentaAdminController');

Route::resource('loges', 'App\Http\Controllers\loginestudianteController');

Route::resource('estumain', 'App\Http\Controllers\estudiantemainController');



Route::post('entrada','App\Http\Controllers\entradaController@validar');


















