<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cidade;

class Estado extends Model
{
    protected $table = "estado";

    public function cidade(){
        return $this->belongsTo(Cidade::class);
    }
}
