<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;
Use App\Loja;
class EnderecoController extends Controller
{

    public function search(Request $request){
        $request->merge([
            'cep' => str_replace(['-'], '', $request->cep),
        ]);
        $cep = $request->query('cep');
        $request = isset($cep) ? $request->query('cep'): '';
        $endereco = Endereco::where('cep', $request->cep)->get();
        return response()->json($endereco);
    }
   
}
