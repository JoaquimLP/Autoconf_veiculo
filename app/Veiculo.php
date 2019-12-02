<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Modelo;

class Veiculo extends Model
{
    protected $table = "veiculo";
    public function modelo(){
        return $this->hasOne(Modelo::class);
    }
}
