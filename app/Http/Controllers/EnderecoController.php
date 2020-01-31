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
            'cep' => str_replace(['-'], '', $request->cep)
        ]);
        $cep = $request->cep;
    
        $estados = Estado::whereHas('cidades', function($query) use ($cep){
            $query->whereHas('bairros', function($query) use ($cep){
                $query->whereHas('enderecos', function($query) use ($cep){
                    $query->where('cep', '=', $cep);
                });
            });
        })->first();
        return response()->json($estados);
    }
    public function searchCidade(Request $request){
        $request->merge([
            'cep' => str_replace(['-'], '', $request->cep)
        ]);
        $cep = $request->cep;
        //$request = isset($cep) ? $request->query('cep'): '';
        $cidade = Cidade::whereHas('bairros', function($query) use ($cep){
            $query->whereHas('enderecos', function($query) use ($cep){
                $query->where('cep', '=', $cep);
            });
            })->first();
        return response()->json($cidade);
    }
    public function searchBairro(Request $request){
        $request->merge([
            'cep' => str_replace(['-'], '', $request->cep)
        ]);
        $cep = $request->cep;
        $request = isset($cep) ? $request->query('cep'): '';
        $bairro = Bairro::whereHas('enderecos', function($query) use ($cep){
                $query->where('cep', '=', $cep);
            })->first();
        return response()->json($bairro);
    }
    public function search(Request $request){
        $request->merge([
            'cep' => str_replace(['-'], '', $request->cep)
        ]);
        $cep = $request->cep;
        //dd($request->cep);
        $request = isset($cep) ? $request->query('cep'): '';
        $endereco = Endereco::where('cep', '=', $cep)->first();
        return response()->json($endereco);
    }
   
}
