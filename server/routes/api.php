<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//ESTADOS
Route::get('estados','App\Http\Controllers\estadosController@getEstados');
Route::get('estados/{id}','App\Http\Controllers\estadosController@getEstado');

// PAISES
Route::get('paises','App\Http\Controllers\paisesController@getPaises');
Route::get('paises/{id}','App\Http\Controllers\paisesController@getPais');

//DOCUMENTOS
Route::get('documentos','App\Http\Controllers\documentosController@getDocumentos');
Route::get('documentos/{id}','App\Http\Controllers\documentosController@getDocumento');

//AREA
Route::get('areas','App\Http\Controllers\areaController@getAreas');
Route::get('areas/{id}','App\Http\Controllers\areaController@getArea');

// EMPLEADOS
Route::get('empleados','App\Http\Controllers\empleadosController@getEmpleados');
Route::get('empleados/{id}','App\Http\Controllers\empleadosController@getEmpleado');
Route::get('filtrarempleados','App\Http\Controllers\empleadosController@filtrarEmpleados');

Route::post('addEmpleado','App\Http\Controllers\empleadosController@insertEmpleado');
Route::put('updateEmpleado/{id}', 'App\Http\Controllers\empleadosController@updateEmpleado');

Route::delete('deleteEmpleado/{id}', 'App\Http\Controllers\empleadosController@deleteEmpleado');

