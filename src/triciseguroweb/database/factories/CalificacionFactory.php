<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Calificacione;

use Faker\Generator as Faker;

$factory->define(Calificacione::class, function (Faker $faker) {
    return [

        'servicio'=> 'Excelente',
        'calificacion'=>rand ( 5 , 10 ),
        'taxista_id'=> factory(App\Taxista::class)->create()->id,
    
    ];
});
