<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Promocion_aplicada;
use Faker\Generator as Faker;

$factory->define(Promocion_aplicada::class, function (Faker $faker) {
    return [
        //
        'promocion_id'=> factory(App\Promocion::class)->create()->id,
        'solicitud_id'=> factory(App\Solicitud::class)->create()->id,
    ];
});
