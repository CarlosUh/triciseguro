<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notificacions')->insert([
            'tipo' => 'viaje',
            'mensaje' => 'requieroun viaje hasta el centro de maxcanu',
            'origen' => 1,
            'destino' => 2

        ]);
    }
}