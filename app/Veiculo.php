<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Modelo;
use App\Loja;

class Veiculo extends Model
{
    protected $table = "veiculo";

    protected $fillable = [ "placa",
                            "chassis",
                            "modelo_id",
                            "anomodelo",
                            "anofabricacao"];

    public function modelo(){
        return $this->hasOne(Modelo::class, 'id', 'modelo_id');
    }
    public function loja(){
        return $this->hasOne(Loja::class, 'id', 'loja_id');
    }
    public function galeria(){
        return $this->hasMany(Galeria::class);
    }
}
