<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('tipo')->nullable();
            $table->text('mensaje')->nullable();
            $table->integer('origen_id')->unsigned();
            $table->integer('destino_id')->unsigned();
            $table->foreign('origen_id')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('destino_id')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notificacions');
    }
}
