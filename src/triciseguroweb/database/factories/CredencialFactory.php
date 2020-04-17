<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Credencial;
use Faker\Generator as Faker;

$factory->define(Credencial::class, function (Faker $faker) {
	 $fechaInicial=now();
    return [
     'nombre'=> $faker->firstName,
     'matricula' => '170192168999',
    'vigencia'=>date('Y-m-d', strtotime($fechaInicial. ' + 45 days')),
        

    ];
});