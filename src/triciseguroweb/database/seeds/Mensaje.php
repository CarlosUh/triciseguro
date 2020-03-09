<?php

use Illuminate\Database\Seeder;

class Mensaje extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('mensajes')->insert([
            'Mensaje' => Str::random(10),
            'taxista_id' => 1,
            'solicitud_id'=> 1
        ]);
    }
}
