<?php

use Illuminate\Database\Seeder;

class CredencialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $credencial=factory(App\Documento::class)
          ->make()
              ->documentable()
              ->associate(factory(App\Credencial::class)->create())
          ->save();
    }
}
