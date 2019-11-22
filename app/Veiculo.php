<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Modelo;

class Veiculo extends Model
{
    public function veiculoModelo(){
        return $this->hasMany(Modelo::class);
    }
}
