<?php

use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documentos')->insert([
            'credencial_id' => 1,
            'licencia_id' => 1,
            'comprobante_pago_id' => 1,
        ]);
    }
}
