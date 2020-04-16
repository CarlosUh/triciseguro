<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->string('numero')->nullable();
            $table->integer('pasajero_id')->unsigned();
            $table->foreign('pasajero_id')->references('id')->on('pasajeros')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contactos');
    }
}
