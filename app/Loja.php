<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Endereco;

class Loja extends Model
{
    protected $fillable =
    [
        "nome",
        "cnpj",
        "cep",
        "estado",
        "cidade",
        "bairro",
        "logradouro",
        "numero",
        "complemento"
    ];
    public function endereco(){
        return $this->hasOne(Endereco::class, 'id', 'logradouro_id');
    }
}
