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
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero', 50);
            $table->bigInteger('veiculo_id')->unsigned()->nullable();
            $table->foreign('veiculo_id')->references('id')->on('veiculos');
            $table->date('data');
            $table->string('itens', 50);
            $table->string('valor', 50);
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
        Schema::dropIfExists('orcamentos');
    }
};
