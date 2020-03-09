<?php

use Illuminate\Database\Seeder;

class ubicacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("ubicaciones")-> insert([
        	'nombre' => 'yucatan',
        	'latitude' => '21.056786',
        	'longitud' => '-89.23455',
        	'descripcion' => 'centro',
        	'persona_id' => '1,
        ])
    }
}
