<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UbicacionSeeder');
        $this->call('PromocionSeeder');
        $this->call('SolicitudViajeSeeder');
        $this->call('ContactoSeeder');
    }
}
