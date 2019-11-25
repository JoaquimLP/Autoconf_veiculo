<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index(Request $request){
        return view('veiculo.index');
    }

    public function create(Request $request){
        return view('veiculo.create');
    }

    public function store(Request $request){
        
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

