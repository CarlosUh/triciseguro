<?php

use Illuminate\Database\Seeder;

class PlacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('placas')->insert([
            'nombre' => 'B-438638',
            'color' => 'rojo',
            'tamanio' => '15 cm',
            'mototaxi_id' =>'1',
        ]);
    }
}
