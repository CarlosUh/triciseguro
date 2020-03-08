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
            'nombre' => Str::random(10),
            'color' => Str::random(10),
            'tamanio' => Str::random(10),
        ]);
    }
}
