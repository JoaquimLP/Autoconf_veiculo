<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LojaStore;
use App\Loja;
class LojaController extends Controller
{
    public function indexLoja(){
        return view('loja.index');
    }

    public function createLoja(){
        return view('loja.create');
    }

    public function storeLoja(LojaStore $request){
        //dd($request->all());
        $request->merge([
            'cnpj' => str_replace(['.', '/','-'], '', $request->cnpj),
        ]);
        $loja = Loja::insert($request->except(['_token', '_method']));
        //dd($request->except(['_token', '_method', 'marca']));
        return redirect()->route('loja');
    }

    public function editLoja(){
        return view('loja.edit');
    }

    public function updatetLoja(){
       
    }

    public function destroyLoja(){
       
    }


}
