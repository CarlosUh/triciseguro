<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('idSolicitud')->unsigned();
            $table->integer('idAlerta')->unsigned();
            $table->foreign('idSolicitud')->references('id')->on('solicitud')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idAlerta')->references('id')->on('alerta')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('viajes');
    }
}

