<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('taxista')->nullable();
            $table->text('servicio')->nullable();
            $table->text('calificacion')->nullable();
            $table->foreign('taxista_id')->references('id')->on('taxista')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calificacions');
    }
}
