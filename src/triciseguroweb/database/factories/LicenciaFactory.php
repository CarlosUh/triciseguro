<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Licencia;
use Faker\Generator as Faker;

$factory->define(Licencia::class, function (Faker $faker) {
    return [
        	'nacionalidad'=> 'Mexicana',
        	'fecha_expedicion'=> $faker->date,
        	'fecha_vencimiento'=>$faker->date
    ];
});
