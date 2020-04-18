<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('mensaje')->nullable();
            $table->integer('taxista_id')->unsigned();
            $table->integer('solicitud_id')->unsigned();
            $table->foreign('taxista_id')->references('id')->on('taxistas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('solicitud_id')->references('id')->on('solicitudes')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mensajes');
    }
}
