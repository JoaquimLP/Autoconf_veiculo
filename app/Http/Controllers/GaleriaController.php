<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;

class GaleriaController extends Controller
{
    public function galeria(Request $request, $id){
        $veiculo = Veiculo::find($id);
        return view('veiculo.galeria.create', compact('veiculo'));
    }
}
