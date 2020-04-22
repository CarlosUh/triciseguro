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
