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

Route::get('/persona', 'App\Http\Controllers\PersonaController@index');

Route::get('/persona/{id}', 'App\Http\Controllers\PersonaController@show');

Route::get('/empresa', 'App\Http\Controllers\EmpresaController@index');

Route::get('/empresa/{id}', 'App\Http\Controllers\EmpresaController@show');


