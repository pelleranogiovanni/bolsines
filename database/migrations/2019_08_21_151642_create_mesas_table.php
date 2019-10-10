<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('circuito');
            $table->string('tipo');
            $table->integer('numero');
            // $table->integer('blancos');
            // $table->integer('nulos');
            // $table->integer('recurridos');
            // $table->integer('impugnados');
            // $table->integer('totalsufragios');
            $table->unsignedBigInteger('escuela_id');
            $table->timestamps();

            $table->foreign('escuela_id')->references('id')->on('escuelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesas');
    }
}
