<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('servicio')->nullable();
            $table->text('calificacion')->nullable();
            $table->integer('taxista_id')->unsigned();
            $table->foreign('taxista_id')->references('id')->on('taxistas')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calificaciones');
    }
}
