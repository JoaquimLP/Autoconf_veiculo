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
                'code' => 'def50200e332dce70053dfc2d1e3f13608c463fdf3e5dbbc95fcc813e5f63ac31a660d068c914883f551977769982028b2f018befe9cafa1cc040056b2fff9cedb53843c060764529468cf858e47a9677cce1ba9c849a19fcd73c8913cc2b59641e8b3d9cfc3876a6f0d966c2c2d370c32351416d7e27954ee392ce592814ff032411f2b502fae85925660753e1254539a4c6a1d69ced3aaf8ac7926deb368a015f1a342c2aa805b2328085110657e148c2f010e43fcd1bfa18b4a561656eecd05689d4a53b65a1d4b362a118d28d184142956c7f42d4c8a8561e2395d864f124b43b96d70586e89461042386198150603117582abfcf130485dcfb52a0727c0dc8425ddebe46f006de2281bd2be312c3aedae2460ac782bb0293edac78683905d7bcf201da51cfe1843be8fe04f9636e6297f818f62247981e1bb7e6a09149055ecf2673a3af0a72a7ac64d1c8986d7f68a7c7c36332e85d7a3152b',
            ],
        ]);
    
        return json_decode((string) $response->getBody(), true);
    }); */
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
