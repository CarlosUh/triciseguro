<?php

use Illuminate\Database\Seeder;

class MensajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mensajes')->insert([
            'mensaje' => Str::random(32),
            'taxista_id' => 1,
            'solicitud_id' => 1,
        ]);
    }
}
