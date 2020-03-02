<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComprobantepagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('comprobante_pagos')->insert([
            'hora' => '3:35 p.m',
            'cantidad' => '20',
            'descripcion' => ' grupal',
            'formapago' => ' efectivo',
            
            
        ]);
    }
}
