<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bairro;
use App\Loja;

class Endereco extends Model
{
    protected $table = "endereco"; 
    public function bairro(){
        return $this->hasOne(Bairro::class, 'id', 'bairro_id');
    }
    public function loja(){
        return $this->belongsTo(Loja::class);
    }
}
