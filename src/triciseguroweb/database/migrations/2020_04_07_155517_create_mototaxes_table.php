<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMototaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mototaxes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('matricula')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mototaxes');
    }
}
