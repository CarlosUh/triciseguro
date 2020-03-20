<?php

use Illuminate\Database\seeder;

class DatabaseSeeder extends seeder{

    /**
     * Seed the aplication's database
     * @return void
     * 
     * 
     */
    public function run()
    {
        $this->call('PromocionSeeder');
        $this->call('SolicitudSeeder');
        $this->call('Promocion_aplicadaSeeder');
    }
}



?>