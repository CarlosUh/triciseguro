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
        //Creacion de comprobante pago
        $comprobantepago=factory(App\Documento::class)
          ->make()
              ->documentable()
              ->associate(factory(App\ComprobantePago::class)->create())
          ->save();
    }
}
