<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ComprobantePago;
use Faker\Generator as Faker;

$factory->define(ComprobantePago::class, function (Faker $faker) {
    return [
      
        'Cantidad'=>rand ( 5 , 70 ),
        'descripcion'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        

    ];
});
