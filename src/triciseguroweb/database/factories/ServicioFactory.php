<?php

use Faker\Generator as Faker;

$factory->define(App\Servicio::class, function (Faker $faker) {
    return [
           'descripcion'=> $faker->address,
    ];
});
