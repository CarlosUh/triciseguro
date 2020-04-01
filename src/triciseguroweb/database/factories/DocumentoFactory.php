<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Documento;
use Faker\Generator as Faker;

$factory->define(Documento::class, function (Faker $faker) {
    return [
        //
         	'nombre'=> $faker->firstName,
        	'apellido'=> $faker->lastName,
        	'fecha'=>$faker->date, 
        	'curp' => 'COHI290998HCCR00',
         'taxista_id'=> factory(App\Taxista::class)->create()->id,
    ];
});



