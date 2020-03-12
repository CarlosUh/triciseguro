<?php

use Illuminate\Database\Seeder;

class pasajerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('pasajeros')->insert([
            'nombre' => Str::random(1),
            'contacto_id' =>1,
            'solicitud_id' =>1
        ]);
    }
    
}
