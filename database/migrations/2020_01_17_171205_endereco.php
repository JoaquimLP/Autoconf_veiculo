<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Endereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('endereco'); 
        
        Schema::create('endereco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logadouro', 255);
            $table->string('cep', 8)->key();
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
    }
}
