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

        $busca = $request->query('busca');
        $busca = isset($busca) ? $request->query('busca') : '';
        
        if(!empty($busca)){
            $veiculos = Veiculo::where('placa', 'like', '%'.$busca.'%')->orWhereHas('modelo', function($query) use ($busca){
              $query->where('nome', 'like', '%'.$busca.'%')->orWhereHas('marca', function($query) use ($busca){
                  $query->where('nome', 'like', '%'.$busca.'%');
              });  
            })->paginate(1);
        }else{
            $veiculos = Veiculo::paginate(1);
        }
        return view('veiculo.index', compact('veiculos', 'busca'));
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

    public function edit(Request $request, $id){

        $veiculo = Veiculo::find($id);
        $marcas = Marca::all();
        $modelos = Modelo::where('id', $veiculo->modelo_id)->get();

        return view('veiculo.edit', compact('marcas', 'modelos', 'veiculo'));
    }

    public function update(Request $request, $id){
        $veiculo = Veiculo::find($id);
        $request->merge([
            'placa' => preg_replace("/[^a-zA-Z0-9]+/", "", $request->placa)
        ]);
   
        $veiculo->update($request->except(['_token', '_method', 'marca']));
        //dd($request->except(['_token', '_method', 'marca']));
        return redirect()->route('veiculo');
    }

    public function destroy(Request $request, $id){
        $veiculo = Veiculo::find($id);
        $veiculo->delete();
        
        return redirect()->route('veiculo');
    }

    public function show(Request $request){
        return view('veiculo.show');
    }
}

