<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public function modelo(){
        return $this->belongsTo(Modelo::class);
    }
}
