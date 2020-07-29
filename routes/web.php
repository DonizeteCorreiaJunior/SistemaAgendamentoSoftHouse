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

Route::resource('/usuarios', 'UsuariosController');
Route::post('/', 'UsuariosController@store');
//Route::delete('/usuarios/{CPF}', 'UsuariosController@destroy');
