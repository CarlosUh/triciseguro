<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Notificacion;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'tipo'=> $faker->randomElement(['viaje','promocion']),
        'mensaje'=> $faker->address,
    ];
});
