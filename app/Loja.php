<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Endereco;

class Loja extends Model
{
    //protected $fillable = [ "nome", "cnpj"];
    public function endereco(){
        return $this->hasOne(Endereco::class, 'id', 'logradouro_id');
    }
}
