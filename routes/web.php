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
Route::resource('pes', 'App\Http\Controllers\PesController');

Route::resource('estudiante', 'App\Http\Controllers\estudianteController');

Route::resource('cuentaAdmin', 'App\Http\Controllers\cuentaAdminController');

Route::resource('loges', 'App\Http\Controllers\loginestudianteController');

Route::resource('estumain', 'App\Http\Controllers\estudiantemainController');

Route::resource('generacion', 'App\Http\Controllers\generacionController');

Route::resource('periodo', 'App\Http\Controllers\periodoController');