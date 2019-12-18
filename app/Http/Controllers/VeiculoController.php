<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\VeiculoStore;
use App\Marca;
use App\Modelo;
use App\Veiculo;

class VeiculoController extends Controller
{
    public function index(Request $request){
        $veiculos = Veiculo::all();
        return view('veiculo.index', compact('veiculos'));
    }

    public function create(Request $request){
        $marcas = Marca::all();
        $modelos = collect([]);
        return view('veiculo.create', compact('marcas', 'modelos'));
    }

    public function store(VeiculoStore $request){
        $request->merge([
            'placa' => preg_replace("/[^a-zA-Z0-9]+/", "", $request->placa)
        ]);
   
        $veiculo = Veiculo::insert($request->except(['_token', '_method', 'marca']));
        //dd($request->except(['_token', '_method', 'marca']));
        return redirect()->route('veiculo');
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

