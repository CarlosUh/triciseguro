<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('credencial_id')->unsigned();
            $table->integer('cuota_id')->unsigned();
            $table->integer('licencia_id')->unsigned();
            $table->integer('comprobante_pago_id')->unsigned();
            $table->foreign('credencial_id')->references('id')->on('credencial')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cuota_id')->references('id')->on('cuota')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('licencia')->references('id')->on('licencia')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('comprobante_pago')->references('id')->on('comprobante_pago')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documentos');
    }
}
