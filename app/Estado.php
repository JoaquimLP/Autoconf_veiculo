<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cidade;

class Estado extends Model
{
    protected $table = "estado";

    public function cidades(){
        return $this->hasMany(Cidade::class, 'estado_id', 'id');
    }
}
