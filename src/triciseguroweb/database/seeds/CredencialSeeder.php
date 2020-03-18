<?php

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;

class CredencialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('credencials')->insert([
            'nombre' => Str::random(10),
            'matricula' => Str::random(10),
            'vigencia' => Str::random(10),
        ]);  
    }
}
