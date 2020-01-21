<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function indexLoja(){
        return view('loja-endereco.index');
    }
    public function createLoja(){
        return view('loja-endereco.create');
    }
    public function storeLoja(Request $request){
        dd($request);
    }
}
