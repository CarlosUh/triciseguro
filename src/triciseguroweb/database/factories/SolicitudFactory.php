<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Solicitud::class, function (Faker $faker) {
    return [
          'pasajero_id'=> factory(App\Pasajero::class)->create()->id,
        	'taxista_id'=> factory(App\Taxista::class)->create()->id,
        	'ruta_id'=>factory(App\Ruta::class)->create()->id,

    ];
});
