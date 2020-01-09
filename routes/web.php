<?php

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

//Etapa de veículo
Route::get('/veiculo', '\App\Http\Controllers\VeiculoController@index')->name('veiculo');
Route::get('/veiculo/create', '\App\Http\Controllers\VeiculoController@create')->name('veiculo.create');
Route::post('/veiculo/store', '\App\Http\Controllers\VeiculoController@store')->name('veiculo.store');
Route::get('/veiculo/{id}/edit', '\App\Http\Controllers\VeiculoController@edit')->name('veiculo.edit');
Route::put('/veiculo/{id}/update', '\App\Http\Controllers\VeiculoController@update')->name('veiculo.update');
Route::delete('/veiculo/{id}/destroy', '\App\Http\Controllers\VeiculoController@destroi')->name('veiculo.destroy');
Route::get('/veiculo/{id}/show', '\App\Http\Controllers\VeiculoController@show')->name('veiculo.show');
Route::post('/modelo/search', '\App\Http\Controllers\ModeloController@search')->name('modelo.search');

//Etapa Loja

Route::get('/loja', '\App\Http\Controllers\LojaController@indexLoja')->name('loja');