<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Marca;

class Modelo extends Model
{
    public function marca(){
        return $this->hasOne(Marca::class);
        
    }
    public function veiculo(){
        return $this->belongsTo(Veiculo::class);
    }
}
