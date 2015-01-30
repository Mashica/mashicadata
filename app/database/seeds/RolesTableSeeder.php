<?php

class RolesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//  
		Eloquent::unguard();

		// clean table
		DB::table('roles')->delete();

		// Set timestamp for created and updated
		$rightnow = date("Y-m-d H:i:s");

		Role::create(
			array(
			'name' => 'super',
			'description' => 'Super Administrotors. Super Administrotors have access to all and everything. They have permission to do anything they damn well please.'
		));

		Role::create(
			array(
			'name' => 'admin',
			'description' => 'Administrotors. Admins have access to read and write most content and configuration preferences.'
		));

		Role::create(
			array(
			'name' => 'member',
			'description' => 'Members. Members have access to their own content and configuration options.'
		));


	}

}	