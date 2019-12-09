<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Modelo;

class ModeloController extends Controller
{
    public function search(Request $request){
        $modelos = Modelo::where('marca_id', $request->marca)->get();
        return response()->json($modelos);
    }
}
