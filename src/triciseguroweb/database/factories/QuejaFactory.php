<?php

use App\Queja;
use Faker\Generator as Faker;

$factory->define(Queja::class, function (Faker $faker) {
    return [
           'nombre'=> $faker->firstName,
        	'taxista_id'=> factory(App\Taxista::class)->create()->id,
        	'comentario'=>$faker->address,
    ];
});
