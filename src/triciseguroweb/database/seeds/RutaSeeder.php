<?php

use Illuminate\Database\Seeder;

class RutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rutas')->insert([
            'origen' => 'Centro',
            'destino' => 'UTP',
        ]);
    }
}
