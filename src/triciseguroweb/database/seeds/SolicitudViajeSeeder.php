<?php

use Illuminate\Database\Seeder;

class SolicitudViajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Creacion del taxista
        $taxista=factory(App\Persona::class)
          ->make()
              ->personable()
              ->associate(factory(App\Taxista::class)->create())
          ->save();

        //Creacion del pasajero
        $pasajero=factory(App\Persona::class)
          ->make()
              ->personable()
              ->associate(factory(App\Pasajero::class)->create())
          ->save();
          //Creacion de la ruta
          $ruta=factory(App\Ruta::class)->create();
          //Creacion del viaje
          $v=factory(App\Viaje::class)->create();
          //Creacion de la solicitud
          $solicitud=new App\Solicitud();
          $solicitud->taxista()->associate($taxista);
          $solicitud->pasajero()->associate($pasajero);
          $solicitud->ruta()->associate($ruta);
          $solicitud->solicitable()->associate($v );
          //guardar la solicitud
           $solicitud->save();

    }
}
