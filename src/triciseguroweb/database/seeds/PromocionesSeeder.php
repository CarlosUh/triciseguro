<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromocionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('Promociones')->insert([
        	 'nombre' => 'santos',
        	  'fecha' => '12-03-2020',
        	   'tipo_promocion' => 'Suscripcion',
        	   
            
        ]);
    }
}
