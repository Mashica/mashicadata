<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UsersTableSeeder');
		// $this->command->info('Users table seeded!');

		// $this->call('PesosTableSeeder');
		// $this->command->info('Pesos table seeded!');
		
		$this->call('ProfilesTableSeeder');
		$this->command->info('Profiles table seeded!');
		


	}

}
