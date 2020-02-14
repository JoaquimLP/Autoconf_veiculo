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

Route::group(['middleware' => ['auth']], function () {
    //Etapa de veículo
    Route::get('/veiculo', '\App\Http\Controllers\VeiculoController@index')->name('veiculo');
    Route::get('/veiculo/create', '\App\Http\Controllers\VeiculoController@create')->name('veiculo.create');
    Route::post('/veiculo/store', '\App\Http\Controllers\VeiculoController@store')->name('veiculo.store');
    Route::get('/veiculo/{id}/edit', '\App\Http\Controllers\VeiculoController@edit')->name('veiculo.edit');
    Route::put('/veiculo/{id}/update', '\App\Http\Controllers\VeiculoController@update')->name('veiculo.update');
    Route::delete('/veiculo/{id}/destroy', '\App\Http\Controllers\VeiculoController@destroy')->name('veiculo.destroy');
    Route::get('/veiculo/{id}/show', '\App\Http\Controllers\VeiculoController@show')->name('veiculo.show');
    Route::post('/modelo/search', '\App\Http\Controllers\ModeloController@search')->name('modelo.search');

    //Etapa Loja
    Route::get('/loja', '\App\Http\Controllers\LojaController@indexLoja')->name('loja');
    Route::get('/loja/create', '\App\Http\Controllers\LojaController@createLoja')->name('loja.create');
    Route::post('/loja/store', '\App\Http\Controllers\LojaController@storeLoja')->name('loja.store');
    Route::get('/loja/{id}/edit', '\App\Http\Controllers\LojaController@editLoja')->name('loja.edit');
    Route::put('/loja/{id}/update', '\App\Http\Controllers\LojaController@updateLoja')->name('loja.update');
    Route::delete('/loja/{id}/destroy', '\App\Http\Controllers\LojaController@destroyLoja')->name('loja.destroy');
    Route::post('/estado/search', '\App\Http\Controllers\EnderecoController@searchEstado')->name('endereco.estado.search');
    Route::post('/cidade/search', '\App\Http\Controllers\EnderecoController@searchCidade')->name('endereco.cidade.search');
    Route::post('/bairro/search', '\App\Http\Controllers\EnderecoController@searchBairro')->name('endereco.bairro.search');
    Route::post('/endereco/search', '\App\Http\Controllers\EnderecoController@search')->name('endereco.search');

    Route::get('/veiculo/{id}/galeria', '\App\Http\Controllers\GaleriaController@galeria')->name('veiculo.galeria');
    Route::get('/veiculo/{id}/save', '\App\Http\Controllers\GaleriaController@save')->name('veiculo.save');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
