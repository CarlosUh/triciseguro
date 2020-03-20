<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Solicitud extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solicituds')->insert([
            'promocion_id' => 1,
            'ruta_id' => 1,
            'calificacion_id' => 1,
            'servicio_id' => 1,
        ]);
    }
}
