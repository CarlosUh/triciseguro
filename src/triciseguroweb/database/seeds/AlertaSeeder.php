<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alertas')->insert([
            'descripcion' => 'Me llevan a un callejon sin salida',
            'fecha' => '02-03-2020',
            'pasajero_id' => 1,
            'viaje_id' => 2

        ]);
    }
}
