<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('personas', function (Blueprint $table) {
        $table->integer('personable_id')->unsigned();
        $table->string('personable_type');
          });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('personas', function (Blueprint $table) {
        $table->dropColumn('personable_id');
        $table->dropColumn('personable_type');
          });
    }
}
