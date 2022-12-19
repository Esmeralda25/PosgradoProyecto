<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriodoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/periodos/Estudiante/{periodo}', [PeriodoController::class, 'EstudianteGet'])->name('periodos.EstudianteGet');
Route::get('/periodos/EstudianteAsignar/{periodo?}', [PeriodoController::class, 'EstudianteAsignar'])->name('periodos.EstudianteAsignar');
Route::patch('/periodos/EstudianteAsignar/{periodo?}', [PeriodoController::class, 'EstudianteAsignarPatch'])->name('periodos.EstudianteAsignarPatch');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
