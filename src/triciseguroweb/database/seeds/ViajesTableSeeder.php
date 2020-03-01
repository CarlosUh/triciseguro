<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViajesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('viajes')->insert([
            'idSolicitud' => '7',
            'idAlerta' => '7',

        ]);
    }
}
