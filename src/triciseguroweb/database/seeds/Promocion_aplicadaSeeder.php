<?php

use Illuminate\Database\Seeder;

class Promocion_aplicadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promociones_aplicadas')->insert([
            'promocion_id' => 1,
            'solicitud_id' => 2
        ]);
    }
}
