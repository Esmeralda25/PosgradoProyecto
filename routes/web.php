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
//Route::resource('estudiantes', 'App\Http\Controllers\estudianteController@estatusAlumno');

//Route::resource('proyectos', 'App\Http\Controllers\proyectosController');
Route::get('registrar','App\Http\Controllers\proyectosController@registrar');
Route::post('registrar','App\Http\Controllers\proyectosController@store');
Route::get('seguimiento','App\Http\Controllers\proyectosController@show');
Route::get('comprometerse','App\Http\Controllers\proyectosController@edit');
Route::put('comprometerse','App\Http\Controllers\proyectosController@update');





//Route::post('addproyectos','App\Http\Controllers\proyectosController@store');// para que lo mandas si store ya te lo da el resource de la linea 40


//Route::resource('asignar', 'App\Http\Controllers\asignarController');
Route::get('asignar-asesores/{id_proyecto}','App\Http\Controllers\proyectosController@asignarAsesores' );
//nota:  componer las rutas, aplicar convenciones en todo el sistema

Route::post('proyectos','App\Http\Controllers\proyectosController@Store');

Route::resource('reportes', 'App\Http\Controllers\reportarController');

//Route::resource('mainestudiantes', 'App\Http\Controllers\mainestudiante2Controller'); //solo tiene una accion pero todo lo declaran como resource



//Coordinador->index(listar), sotre(guardar), create, show, edit, update, delete
Route::get('editar-usuarios/{tipo}/{id}','App\Http\Controllers\coordinadorController@editarLista');
Route::put('actualizar-usuarios/{tipo}/{id}','App\Http\Controllers\coordinadorController@actualizarLista');

Route::resource('coordinadores', 'App\Http\Controllers\coordinadorController');

Route::get('usuarios', 'App\Http\Controllers\coordinadorController@agregarUsuarios');

Route::get('agregar', 'App\Http\Controllers\coordinadorController@create');
Route::post('add', 'App\Http\Controllers\coordinadorController@store');
 
Route::get('editar-contraseñas/{tipo}/{id}','App\Http\Controllers\coordinadorController@password');
Route::put('actualizar-contraseñas/{tipo}/{id}','App\Http\Controllers\coordinadorController@guardarPassword');

//Proyectos
Route::put('comites/{id}','App\Http\Controllers\coordinadorController@actualizarComite');
Route::put('compromisos/{id}','App\Http\Controllers\coordinadorController@actualizarCompromiso');


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
Route::put('actualizar-periodos/{id}','App\Http\Controllers\PeriodosController@update');
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
Route::get('editar-criterios/{id}','App\Http\Controllers\CriteriosController@edit');
Route::put('actualizar-criterios/{id}','App\Http\Controllers\CriteriosController@update');
Route::put('borrar-criterios/{id}','App\Http\Controllers\CriteriosController@destroy');


//Compromisos
Route::resource('Compromisos', 'App\Http\Controllers\CompromisosController');
/*

~/proyectos/doctorado:master$ php artisan route:list | grep Compromisos
|        | POST      | Compromisos                           | Compromisos.store       | App\Http\Controllers\CompromisosController@store                | web        |
|        | GET|HEAD  | Compromisos                           | Compromisos.index       | App\Http\Controllers\CompromisosController@index                | web        |
|        | GET|HEAD  | Compromisos/create                    | Compromisos.create      | App\Http\Controllers\CompromisosController@create               | web        |
|        | DELETE    | Compromisos/{Compromiso}              | Compromisos.destroy     | App\Http\Controllers\CompromisosController@destroy              | web        |
|        | PUT|PATCH | Compromisos/{Compromiso}              | Compromisos.update      | App\Http\Controllers\CompromisosController@update               | web        |
|        | GET|HEAD  | Compromisos/{Compromiso}              | Compromisos.show        | App\Http\Controllers\CompromisosController@show                 | web        |
|        | GET|HEAD  | Compromisos/{Compromiso}/edit         | Compromisos.edit        | App\Http\Controllers\CompromisosController@edit                 | web        |
El resource ya agrego las proximas tres rutas, pero deben llamarlas como su nombre es
*/
Route::get('agregarCompromisos','App\Http\Controllers\CompromisosController@create');
Route::post('guardarCompromisos','App\Http\Controllers\CompromisosController@store');
Route::get('editarCompromisos/{id}','App\Http\Controllers\CompromisosController@edit');


Route::resource('compromisos', 'App\Http\Controllers\compromisosadquiridosController');








/*
como debieron cambiar esto?
Route::resource('estadisticos', 'App\Http\Controllers\estadisticoController');
*/

Route::resource('asesores', 'App\Http\Controllers\asesorController');
Route::resource('asignaciones', 'App\Http\Controllers\asignarController');

//Docente 

Route::resource('docentes', 'App\Http\Controllers\docenteController');

//Docente Evaluaciones
Route::get('evaluaciones/{id}', 'App\Http\Controllers\evaluarController@index');
Route::post('guardar-calificaciones','App\Http\Controllers\evaluarController@store');
Route::get('mostrar-calificaciones/{id}','App\Http\Controllers\evaluarController@show');
Route::get('porcentaje-proyectos/{id}','App\Http\Controllers\evaluarController@porcentaje');
Route::put('guardar-porcentajes/{id}','App\Http\Controllers\evaluarController@guardarPorcentajes');


Route::get('historicos', 'App\Http\Controllers\historicoController@index');

Route::resource('historicorevs', 'App\Http\Controllers\historicorevController');



Route::resource('cuentaAdmins', 'App\Http\Controllers\cuentaAdminController');

//Route::resource('loges', 'App\Http\Controllers\loginController');

//Route::resource('estumains', 'App\Http\Controllers\estudiantemainController');



Route::post('entrada','App\Http\Controllers\entradaController@validar'); 
Route::get('logout', 'App\Http\Controllers\entradaController@logout');
Route::resource('info', 'App\Http\Controllers\infoController');



Route::get('/prueba', function () {
    echo Hash::make( 'paso' );
});
