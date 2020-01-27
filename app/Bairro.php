<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cidade;
use App\Endereco;

class Bairro extends Model
{
    protected $table = "bairro"; 
    public function cidade(){
        return $this->hasOne(Cidade::class, 'id', 'cidade_id');
    }
    public function endereco(){
        return $this->belongsTo(Endereco::class);
    }
}
