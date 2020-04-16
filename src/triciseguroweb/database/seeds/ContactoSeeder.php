<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    //Creacion del viajero
    $viajero=factory(App\Persona::class)
      ->make()
          ->personable()
          ->associate(factory(App\Contacto::class)->create())
      ->save();



    }
}
