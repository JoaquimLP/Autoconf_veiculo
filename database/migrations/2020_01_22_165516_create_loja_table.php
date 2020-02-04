<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLojaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('lojas');
        Schema::create('lojas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 150);
            $table->string('cnpj', 14)->unique();
            $table->string('cep', 8);
            $table->string('estado', 50);
            $table->string('cidade', 50);
            $table->string('logradouro', 255);
            $table->string('numero');            
            $table->string('complemento', 50);            
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
        Schema::dropIfExists('loja');
    }
}
