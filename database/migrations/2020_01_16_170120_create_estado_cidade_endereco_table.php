<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoCidadeEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->timestamps();
        });
        Schema::create('cidade', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')
                        ->references('id')->on('estado');
            $table->timestamps();
        });
        Schema::create('bairro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->unsignedBigInteger('cidade_id');
            $table->foreign('cidade_id')
                        ->references('id')->on('cidade');
            $table->timestamps();
        });
        Schema::create('endereco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logadora', 255);
            $table->string('cep', 8);
            $table->string('numeroInicio');
            $table->string('numeroFim');
            $table->unsignedBigInteger('bairro_id');
            $table->foreign('bairro_id')
                        ->references('id')->on('bairro');
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
        Schema::dropIfExists('endereco');
        Schema::dropIfExists('bairro');
        Schema::dropIfExists('cidade');
        Schema::dropIfExists('estado');
    }
}
