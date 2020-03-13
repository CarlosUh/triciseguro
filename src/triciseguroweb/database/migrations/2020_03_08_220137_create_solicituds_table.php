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
        Schema::create('solicituds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('promocion_id')->unsigned();
            $table->integer('ruta_id')->unsigned();
            $table->integer('calificacion_id')->unsigned();
            $table->integer('servicio_id')->unsigned();
            $table->foreign('promocion_id')->references('id')->on('promocion')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ruta_id')->references('id')->on('Ruta')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('calificacion_id')->references('id')->on('calificacion')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicio')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('solicituds');
    }
}
