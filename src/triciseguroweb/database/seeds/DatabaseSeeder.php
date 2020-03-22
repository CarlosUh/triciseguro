<?php
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> remotes/origin/DiegoNaal
=======

>>>>>>> Alexis.Kumul
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> Alexis.Kumul
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        
        $this->call('CalificacionSeeder');
    }
}
=======
	public function run()
	{
		$this->call(RutasSeeder::class);
	}
}
>>>>>>> remotes/origin/DiegoNaal
=======
        $this->call(TaxistaSeeder::class);
    }
}
>>>>>>> Alexis.Kumul
