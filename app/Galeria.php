<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    public function veiculo(){
        return $this->hasOne(Veiculo::class);
    }
}
