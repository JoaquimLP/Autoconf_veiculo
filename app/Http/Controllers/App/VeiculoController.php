<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Veiculo;
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
        $veiculos = Veiculo::whereHas('loja', function($query) use ($request){
            $query->where('cnpj', $request->cnpj);
        })->get();
        return response()->json($veiculos);
    }

}
