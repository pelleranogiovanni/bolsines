<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatoMesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_mesa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('candidato_id');
            $table->unsignedBigInteger('mesa_id');
            $table->string('votos');
            $table->timestamps();

            $table->foreign('candidato_id')->references('id')->on('candidatos');
            $table->foreign('mesa_id')->references('id')->on('mesas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidato_mesa');
    }
}
