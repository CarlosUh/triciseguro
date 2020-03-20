<?php
<<<<<<< HEAD

=======
>>>>>>> remotes/origin/DiegoNaal
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
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
