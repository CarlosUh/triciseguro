<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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
            'nombre' => 'Marcos',
            'quejas' => 'todo bien',
            'ruta' => 'san cristian',
            'mototaxi' => '01312',
            'persona_id' => 22,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}