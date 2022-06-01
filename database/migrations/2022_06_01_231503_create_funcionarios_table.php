<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('funcao', 100);
            $table->string('cpf', 15);
            $table->string('idade', 2);
            $table->string('sexo', 1);
            $table->string('telefone', 30);
            $table->string('email', 100);
            $table->string('cep', 20);
            $table->string('rua', 100);
            $table->string('bairro', 100);
            $table->string('cidade', 50);
            $table->string('estado', 2);
            $table->string('numero', 10);
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
        Schema::dropIfExists('funcionarios');
    }
};
