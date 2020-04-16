<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contacto;
use Faker\Generator as Faker;

$factory->define(Contacto::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->firstName,
        "numero"=> $faker->phoneNumber,
        'pasajero_id'=> factory(App\Pasajero::class)->create()->id,
    
      
    ];
});
