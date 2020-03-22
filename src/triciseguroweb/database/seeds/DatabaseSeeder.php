<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       
         $this->call(ViajesTableSeeder::class);

        // $this->call(UsersTableSeeder::class);

        
        $this->call('CalificacionSeeder');
    }
}

	public function run()
	{
		$this->call(RutasSeeder::class);
	}
}

        $this->call(TaxistaSeeder::class);

    }
}

