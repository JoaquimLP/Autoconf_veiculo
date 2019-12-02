<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = "marca";
    public function modelo(){
        return $this->belongsTo(Modelo::class);
    }
}
