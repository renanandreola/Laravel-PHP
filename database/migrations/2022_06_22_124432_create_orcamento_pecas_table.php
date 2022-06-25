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
        Schema::create('orcamento_pecas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("orcamento_id")->unsigned()->nullable();
            $table->foreign("orcamento_id")->references('id')->on('orcamentos');
            $table->bigInteger("peca_id")->unsigned()->nullable();
            $table->foreign("peca_id")->references('id')->on('pecas');
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
        Schema::dropIfExists('orcamento_pecas');
    }
};
