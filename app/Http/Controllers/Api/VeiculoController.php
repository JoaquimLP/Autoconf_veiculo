<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Veiculo;
use App\Galeria;
use Validator;

class VeiculoController extends Controller
{
    public function search(Request $request){
        // validação
        $validator = Validator::make($request->all(), [
            'cnpj' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->messages()]);
        }
        $veiculos = DB::table('veiculo')
            ->join('lojas', 'lojas.id', '=', 'veiculo.loja_id')
            ->join('modelo', 'modelo.id', '=', 'veiculo.modelo_id')
            ->join('marca', 'marca.id', '=', 'modelo.marca_id')
            ->join('galerias', 'galerias.veiculo_id', '=', 'veiculo.id')
            ->where('galerias.ordem', '=', 0)
            ->where('lojas.cnpj', $request->cnpj)
            ->select(
            'veiculo.id',
            'veiculo.anomodelo',
            'veiculo.anofabricacao',
            'lojas.nome as loja_nome',
            'marca.nome as marca_nome',
            'modelo.nome as modelo_nome',
            'galerias.path as fotos'
            )->get();


            
        return response()->json($veiculos);
    }

    public function getVeiculo(Request $request, $id){
        $veiculo = Veiculo::find($id);
        $galerias = Galeria::where('veiculo_id', $veiculo->id)->get();

        foreach($galerias as $galeria){
            each($galeria);
        }
    }

}
