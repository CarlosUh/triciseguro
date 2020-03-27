<?php

use Faker\Generator as Faker;

$factory->define(App\Ruta::class, function (Faker $faker) {
    return [
          'origen_id'=> factory(App\Ubicacion::class)->create()->id,
        	'destino_id'=> factory(App\Ubicacion::class)->create()->id,
    ];
});
