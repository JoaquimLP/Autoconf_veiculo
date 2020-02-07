<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculoLoja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('veiculo');
        Schema::create('veiculo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa', 7);
            $table->unsignedBigInteger('modelo_id');
            $table->foreign('modelo_id')
            ->references('id')->on('modelo');
            $table->string('chassis', 16);
            $table->year('anofabricacao');
            $table->year('anomodelo');
            $table->unsignedBigInteger('loja_id');
            $table->foreign('loja_id')
                        ->references('id')->on('lojas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
