<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;
use App\Loja;
use App\Estado;
use App\Cidade;
use App\Bairro;

class EnderecoController extends Controller
{

    public function searchEstado(Request $request){
        $request->merge([
            'cep' =>  preg_replace("/[0-9]+/", "",  $request->cep),
        ]);
        $cep = $request->query('cep');
        $request = isset($cep) ? $request->query('cep'): '';
        $estados = Estado::whereHas('cidades', function($query) use ($cep){
            $query->whereHas('bairros', function($query) use ($cep){
                $query->whereHas('enderecos', function($query) use ($cep){
                    $query->where('cep', 'like', '%'.$cep.'%');
                });
            });
        })->get('nome');
        return response()->json($estados);
    }
    public function searchCidade(Request $request){
        $request->merge([
            'cep' =>  preg_replace("/[0-9]+/", "",  $request->cep),
        ]);
        $cep = $request->query('cep');
        $request = isset($cep) ? $request->query('cep'): '';
        $cidade = Cidade::whereHas('bairros', function($query) use ($cep){
                $query->whereHas('enderecos', function($query) use ($cep){
                    $query->where('cep', 'like', '%'.$cep.'%');
                });
            })->get();
        return response()->json($cidade);
    }
    public function searchBairro(Request $request){
        $request->merge([
            'cep' =>  preg_replace("/[0-9]+/", "",  $request->cep),
        ]);
        $cep = $request->query('cep');
        $request = isset($cep) ? $request->query('cep'): '';
        $bairro = Bairro::whereHas('enderecos', function($query) use ($cep){
                $query->where('cep', '=', $cep);
            })->get(['nome']);
        return response()->json($bairro);
    }
    public function search(Request $request){
        $request->merge([
            'cep' =>  preg_replace("/[0-9]+/", "",  $request->cep),
        ]);
        $cep = $request->query('cep');
        $request = isset($cep) ? $request->query('cep'): '';
        $endereco = Endereco::where('cep', '=', $cep)->get();
        return response()->json($endereco);
    }
   
}
