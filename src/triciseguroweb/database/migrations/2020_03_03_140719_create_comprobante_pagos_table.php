<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComprobantePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobante_pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->dateTime('fecha')->nullable();
            $table->integer('cantidad')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('formapago')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comprobante_pagos');
    }
}
