<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasajerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajeros', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->integer('contacto_id')->unsigned();
            $table->integer('solicitud_id')->unsigned();
            $table->foreign('contactos_id')->references('id')->on('contactos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('solicitud_id')->references('id')->on('solicitud')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pasajeros');
    }
}
