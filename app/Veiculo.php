<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Modelo;

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
}
