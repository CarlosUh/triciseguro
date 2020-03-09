<?php

use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('servicio')->insert([
            'tipo' => Str::random(10),
            'precio' => Str::random(10),
            
        ]);
    }
    
}
