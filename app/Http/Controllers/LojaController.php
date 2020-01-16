<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LojaStore;
use App\Loja;
use App\Http\Requests\LojaUpdate;
class LojaController extends Controller
{
    public function indexLoja(Request $request){
        $request->merge([
            'busca' => str_replace(['.', '/','-'], '', $request->cnpj),
        ]);
        $busca = $request->query('busca');
        $request = isset($busca) ? $request->query('busca'): '';
        if (!empty($busca)) {
            $lojas = Loja::where('nome', 'like', '%'.$busca.'%')
                            ->orWhere('id', '=', $busca)
                            ->orWhere('cnpj', 'like', $busca)->paginate(2);
            //dd($busca);
        } else {
            $lojas = Loja::paginate(2);
        }
        return view('loja.index', compact('lojas', 'busca'));
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

    public function editLoja(Request $request, $id){
        $loja = Loja::find($id);
        return view('loja.edit', compact('loja'));
    }

    public function updateLoja(LojaUpdate $request, $id){
        $loja = Loja::find($id);
        $request->merge([
            'cnpj' => str_replace(['.', '/','-'], '', $request->cnpj),
        ]);
        $loja->update($request->except(['_token', '_method']));
        return redirect()->route('loja');
    }

    public function destroyLoja(Request $request, $id){
        $loja = Loja::find($id);
        
        $loja->delete();
        return redirect()->route('loja');
    }
}
