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

   Route::get('', function (Request $request) {
       
        $http = new GuzzleHttp\Client;
    
        $response = $http->post('http://localhost:8000/oauth/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => '3',
                'client_secret' => 'xosQ9Hq2huGluJwBYfNmDaBeekrxdmpd1jzmvZZ9',
                'redirect_uri' => 'http://localhost:8000/code/',
                'code' => 'def5020087ff784ecd372c755a92288f67531cc8af561549d7297500677cd5e9b871e3bae6086326ec53cbfa8ee5d9c4ee8b57d905e8ce6e92059cc8c407617562bb0e4ee109869d14de24402bdbdb55ac451baff2c28ea1d30b0dd25acb90134ea11a3ac9c6430998662823a750ab0c904d6195967e6c3a76aea2a982ffc46c42c5ab66da4202c0197f8faacea478d3064033b47f6b17d2966ba49dae982b6e6db876e327e3e6e5750c5369545feb743cc085fd485ef866f2683f9423b29cf2580dd4984fe883bdde9151cb853e572782ae6f8303dbd6c0e100cef8b0b2deda954ae100c883f96b5b34a8525e09c1309da12198a9a01eda7f4b812deaab3bf6dbed6da45c9e697f81027c70f7785666873b5c37d9fda8c92a05afc574afe81a512496a84b9fb953202bc08654483444a66eb31b8926bdc86604058ae2c0b948964b1c4727bebc582d79d740d5ab4cb9f0027ac034160873711f8c04',
            ],
        ]);
    
        return json_decode((string) $response->getBody(), true);
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
