<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Documento;
use Faker\Generator as Faker;

$factory->define(Documento::class, function (Faker $faker) {
    return [
        //
        'credencial_id' => $faker->rand([null, 1, 2, 3, 4, 5]),
         'licencia_id' => $faker->rand([null, 1, 2, 3, 4, 5]),
          'comprobante_pago_id' => $faker->rand([null, 1, 2, 3, 4, 5])
    ];
});
