<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cidade;
use App\Endereco;

class Bairro extends Model
{
    protected $table = "bairro"; 

    public function cidade(){
        return $this->belongsTo(Cidade::class);
    }

    public function enderecos(){
        return $this->hasMany(Endereco::class, 'bairro_id', 'id');
    }
}
