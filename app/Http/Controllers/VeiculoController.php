<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\VeiculoStore;
use App\Marca;
use App\Modelo;

class VeiculoController extends Controller
{
    public function index(Request $request){
        return view('veiculo.index');
    }

    public function create(Request $request){
        $marcas = Marca::all();
        $modelos = collect([]);
        
        return view('veiculo.create', compact('marcas', 'modelos'));
    }

    public function store(VeiculoStore $request){
        dd($request);
    }

    public function edit(Request $request){
        return view('veiculo.edit');
    }

    public function update(Request $request){
        //return view('veiculo.index');
    }

    public function destroi(Request $request){
        //return view('veiculo.index');
    }

    public function show(Request $request){
        return view('veiculo.show');
    }
}

