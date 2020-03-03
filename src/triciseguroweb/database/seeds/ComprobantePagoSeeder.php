<?php

use Illuminate\Database\Seeder;

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
            'fecha' => '2020-03-03',
            'cantidad' => 20,
            'descripcion' => 'Grupal',
            'formapago' => 'efectivo',
        ]);
    }
}
