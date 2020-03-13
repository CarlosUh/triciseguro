<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class QuejasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quejas')->insert([
            'nombre' => Str::random(10),
            'taxista' => Str::random(10),
            'descripcion' => Str::random(10),
        ]);
    }
}
