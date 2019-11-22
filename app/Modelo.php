<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Marca;

class Modelo extends Model
{
    public function modeloMarca(){
        //return $this->hasOne(Marca::class);
        return $this->hasMany(Marca::class);
    }
}
