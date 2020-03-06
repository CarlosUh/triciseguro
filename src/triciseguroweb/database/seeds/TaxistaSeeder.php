<?php

use Illuminate\Database\Seeder;

class TaxistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taxistas')->insert([
            'nombre' => Str::random(10),
            'pasajero' => Str::random(10),
            'quejas' => Str::random(10),
            'ruta' => Str::random(10),
            'mototaxi' => Str::random(10),
        ]);  
    }
}
