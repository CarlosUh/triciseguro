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
<<<<<<< HEAD:src/triciseguroweb/database/migrations/2020_03_12_185755_create_licencias_table.php
            $table->string('nacionalidad')->nullable();
            $table->date('fecha_expedicion')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->integer('vigencia')->nullable();
            $table->foreign('documento_id')->references('id')->on('documento')->onDelete('cascade')->onUpdate('cascade');
=======
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('curp')->nullable();
            $table->string('fecha')->nullable();
            $table->integer('taxista_id')->unsigned();
            $table->foreign('taxista_id')->references('id')->on('credencial')->onDelete('cascade')->onUpdate('cascade');
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/database/migrations/2020_03_11_231205_create_documentos_table.php
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
