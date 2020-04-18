<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('solicitable_id')->unsigned();
            $table->string('solicitable_type');
            $table->integer('pasajero_id')->unsigned();
            $table->integer('taxista_id')->unsigned();
            $table->integer('ruta_id')->unsigned();
            $table->foreign('pasajero_id')->references('id')->on('pasajeros')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('taxista_id')->references('id')->on('taxistas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ruta_id')->references('id')->on('rutas')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('solicitudes');
    }
}
