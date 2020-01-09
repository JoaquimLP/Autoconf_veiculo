<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    public function indexLoja(){
        return view('loja.index');
    }
}
