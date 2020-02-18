<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;
use App\Galeria;

class GaleriaController extends Controller
{
    public function galeria(Request $request, $id){
        $veiculo = Veiculo::find($id);
        return view('veiculo.galeria.create', compact('veiculo'));
    }
    public function save(Request $request, $id){
        $veiculo = Veiculo::find($id);

        for($i = 0; $i < count($request->allFiles()['image']); $i++){
            $file = $request->allFiles()['image'][$i];

            $image = new Galeria;
            $image->veiculo_id = $veiculo->id;
            $image->path = $file->store('veiculo/'.$veiculo->id);
            $image->ordem = $i;
            $image->save();
            unset($image);
        }
        return redirect()
                    ->route('veiculo')
                    ->with('success', 'Produto Atualizado com sucesso');  
        
    }
}
