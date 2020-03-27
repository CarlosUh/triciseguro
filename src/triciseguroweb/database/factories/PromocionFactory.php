<?php

use Faker\Generator as Faker;

$factory->define(App\Promocion::class, function (Faker $faker) {
  $fechaInicial=now();
    return [
           'nombre'=> $faker->firstName,
        	'fecha_inicio'=> $fechaInicial,
        	'fecha_fin'=>date('Y-m-d', strtotime($fechaInicial. ' + 45 days')),
        	'descripcion'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        	'tipo'=>$faker->randomElement(['valor', 'porcentaje']),
          'dato'=>rand ( 5 , 70 ),
    ];
});
