<?php

use App\Ubicacion;
use Faker\Generator as Faker;

$factory->define(Ubicacion::class, function (Faker $faker) {
    return [
           'nombre'=> $faker->firstName,
        	'latitud'=> $faker->latitude,
        	'longitud'=>$faker->longitude,
        	'description'=>$faker->address,
    ];
});
