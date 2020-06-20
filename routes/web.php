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

Route::GET('/carros', 'CarroController@index')->name('home');

Route::GET('/carros/{id}','CarroController@show')->name('show');

Route::GET('/cadastro', 'CarroController@create')->name('create');
Route::POST('/carros', 'CarroController@store')->name('store');


Route::GET('/editar/{id}', 'CarroController@edit')->name('edit');
Route::POST('/editar/{id}', 'CarroController@update')->name('update');

Route::DELETE('/deletar/{id}', 'CarroController@destroy')->name('delete');