<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Marca;

class Modelo extends Model
{
    protected $table = "modelo";
    protected $fillable = [ 
        "nome",
        "marca_id",
    ];

    public function marca(){
        return $this->hasOne(Marca::class, 'id', 'marca_id');
        
    }
    public function veiculo(){
        return $this->belongsTo(Veiculo::class);
    }
}
