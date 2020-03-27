<?php

use Faker\Generator as Faker;

$factory->define(App\Pasajero::class, function (Faker $faker) {
    return [
           'promocion_id'=> factory(App\Promocion::class)->create()->id,
    ];
});
