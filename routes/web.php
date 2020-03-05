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
    Route::post('/veiculo/{id}/save', '\App\Http\Controllers\GaleriaController@save')->name('veiculo.save');

    Route::get('/redirect', function (Request $request) {
        $query = http_build_query([
            'client_id' => '3',
            'redirect_uri' => 'http://localhost:8000/code/',
            'response_type' => 'code',
            'scope' => '',
            'state' => '',
        ]);
    
        return redirect('http://localhost:8000/oauth/authorize?'.$query);
    });

    /*Route::get('/callback', function (Request $request) {
       
        $http = new GuzzleHttp\Client;
    
        $response = $http->post('http://localhost:8000/oauth/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => '3',
                'client_secret' => 'xosQ9Hq2huGluJwBYfNmDaBeekrxdmpd1jzmvZZ9',
                'redirect_uri' => 'http://localhost:8000/code/',
                'code' => 'def502000bd9976724a8b1e3dfdc4e4aa01a5329319b7b7ba0ac7f4d6b9bb092c609bc3ba004e5a25d34e305f7bffdf8b0123d24ddc30bd963adf26b788fe264f4b55e9f43d8d04b22d8f759c6dc189468caebb41e4129e57a17f0180e285f3aeb960df1984d24b4d1a0297649ca6aead50b764c4f450266e7134fcc4aaf9c4a466877221cd9d660c6132ba2368567618203067f21162ec8c57b1c35c2a0bb69c24a61bc50799c166ca63e4d1b76917380d50daa275ae806e59c33ca1878393e843fb8684a5fb4c8dbb4caacaa79fdf2750cf2adb439db74a89728b1e5a54abfba9a865f856e6df743710165e1ce79b7a8dbdf9103c45c9b7d36aab4c74660e60853e462dc99e74dad4bff8c23d01819bcf5ca807a83b0988907464d3b8a816a7c3caf672dc8e8bb92da48ca48ab5fabbe171b1792db4ea015d537d1d43a77886bf855894e3095692fe6a3fb31d737ce0de66c81bea78cbd226a13fc',
            ],
        ]);
    
        return json_decode((string) $response->getBody(), true);
    });*/
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
