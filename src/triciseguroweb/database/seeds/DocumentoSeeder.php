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
            'nombre' => 'Irving Edilberto',
            'apellido' => 'Cob Huchin',
            'curp' => 'COHI950629IICR00',
            'fecha' => '11/03/2020',
            'taxista_id' => 1,
        ]);
    }
}



 

    