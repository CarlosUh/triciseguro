<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calificaciones')->insert([
            'taxista' => '11',
            'servicio' => 'hg',
            'calificacion' => '19',

            'taxista_id' => '1' ,

        ]);
    }
}