<?php

use Illuminate\Database\Seeder;

class CalificacionSeeder extends Seeder
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
          ->associate(factory(App\Calificacione::class)->create())
      ->save();
    }
}
