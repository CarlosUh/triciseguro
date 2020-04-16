<?php

use Illuminate\Database\Seeder;

class LicenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creacion de la Licencia
        $licencia=factory(App\Documento::class)
          ->make()
              ->documentable()
              ->associate(factory(App\Licencia::class)->create())
          ->save();
    }
}
