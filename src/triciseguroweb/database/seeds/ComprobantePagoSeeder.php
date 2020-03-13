<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ComprobantePagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comprobante_pagos')->insert([
            'cantidad' => 20,
            'descripcion' => 'Grupal',
            'documento_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}