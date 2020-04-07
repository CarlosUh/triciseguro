<?php

use Illuminate\Database\Seeder;

class RutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Ruta::class, 2)->create();
    }
}
