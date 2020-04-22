<?php

use Illuminate\Database\Seeder;

class Promocion_aplicadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creacion de taxista
        $taxista = factory(App\Persona::class)
        	->make()
        		->personable()
        		->associate(factory(App\Taxista::class)->create())

        	->save();

        //creacion de pasajero
        $pasajero = factory(App\Persona::class)
        	->make()
        		->personable()
        		->associate(factory(App\Pasajero::class)->create())
        	->save();

        //creacion de la ruta
        $ruta = factory(App\Ruta::class)->create();
        //creacion del viaje
        $v = factory(App\Viaje::class)->create();
        //creacion de la promocion
        $promocion = factory(App\Promocion::class)->create();
        //creacion de la solicitud
        $solicitud = new App\Solicitud();
        $solicitud->taxista()->associate($taxista);
        $solicitud->pasajero()->associate($pasajero);
        $solicitud->ruta()->associate($ruta);
        $solicitud->solicitable()->associate($v);
			$solicitud->save();

		//creacion de la promocion_aplicada
		$promocion_aplicada = new App\Promocion_Aplicada();
		$promocion_aplicada->promocion()->associate($promocion);
		$promocion_aplicada->solicitud()->associate($solicitud);
			$promocion_aplicada->save();



    }
}
