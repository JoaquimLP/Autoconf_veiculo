<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcaModeloVeiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->timestamps();
        });

        Schema::create('modelo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')
                        ->references('id')
                        ->on('marca');
            $table->timestamps();
        });

        Schema::create('veiculo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa', 7);
            $table->unsignedBigInteger('modelo_id');
            $table->foreign('modelo_id')
                        ->references('id')->on('modelo');
            $table->string('chassis', 16);
            $table->year('anofabricacao');
            $table->year('anomodelo');
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
        Schema::dropIfExists('veiculo');
        Schema::dropIfExists('modelo');
        Schema::dropIfExists('marca');
    }
}
