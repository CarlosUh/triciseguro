<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
           'nombre'=> $faker->firstName,
        	'apellido'=> $faker->lastName,
        	'f_nacimiento'=>$faker->date, 
        	'genero'=> $faker->randomElement(['hombre', 'mujer']),
        	'direccion'=>$faker->address,
        	"telefono"=> $faker->phoneNumber
    ];
});
