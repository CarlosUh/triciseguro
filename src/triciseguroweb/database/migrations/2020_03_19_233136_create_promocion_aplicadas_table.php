<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromocionAplicadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocion_aplicadas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('promocion_id')->unsigned();
            $table->integer('solicitud_id')->unsigned();
            $table->foreign('promocion_id')->references('id')->on('promociones')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('promocion_aplicadas');
    }
}
