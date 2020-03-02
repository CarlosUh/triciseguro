<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('descripcion')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->integer('pasajero_id')->unsigned();
            $table->integer('viaje_id')->unsigned();
            $table->foreign('pasajero_id')->references('id')->on('pasajero')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('viaje_id')->references('id')->on('viaje')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alertas');
    }
}
