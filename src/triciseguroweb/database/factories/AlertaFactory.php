<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alerta;
use Faker\Generator as Faker;

$factory->define(Alerta::class, function (Faker $faker) {
    $fecha=now();
    return [
        //
        'descripcion'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'fecha'=> $fecha,
    ];
});
