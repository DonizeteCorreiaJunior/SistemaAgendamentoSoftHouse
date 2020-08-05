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


//Route::delete('/usuarios/{CPF}', 'UsuariosController@destroy');
//Route::resource('/usuarios', 'UsuariosController');

Auth::routes();

Route::get('/', function () {
    return view('homePage');
});

Route::get('/usuarios/create', 'UsuariosController@create')->name('usuario.create');
Route::get('/usuarios', 'UsuariosController@index')->name('usuario.home');
Route::get('/usuarios/login', 'Auth\UsuarioLoginController@index')->name('usuario.login');
Route::get('/usuarios/login', 'Auth\UsuarioLoginController@login')->name('usuario.login.submit');
Route::post('/', 'UsuariosController@store');

Route::get('/admin', 'AdminsController@index')->name('admin.home');
Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
