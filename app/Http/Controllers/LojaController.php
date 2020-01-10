<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    public function indexLoja(){
        return view('loja.index');
    }

    public function createLoja(){
        return view('loja.create');
    }

    public function storeLoja(){
        
    }

    public function editLoja(){
        return view('loja.edit');
    }

    public function updatetLoja(){
       
    }

    public function destroyLoja(){
       
    }


}
