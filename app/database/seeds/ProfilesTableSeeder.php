<?php

class ProfilesTableSeeder extends Seeder {

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
		DB::table('profiles')->delete();

		// Set timestamp for created and updated
		$rightnow = date("Y-m-d H:i:s");

		Profile::create(
			array(
			'user_id' => '1',
			'tel' => '951 520 2645',
			'cel' => '951 229 0464',
			'address' => 'Escuadrón 201 #311',
			'colonia' => 'Colonia Reforma',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'cp' => '68050',
			'country' => 'MX',
			'birthday' => '1969-01-04',
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		Profile::create(
			array(
			'user_id' => '2',
			'tel' => '[+34] 91 521 4289',
			'cel' => '[+34] 67 839 5097',
			'address' => 'Calle Marqués de S.Ana 25, 3º 4º',
			'colonia' => '',
			'city' => 'Madrid',
			'state' => 'Madrid',
			'cp' => '28004',
			'country' => 'ES',
			'birthday' => '1972-06-20',
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		Profile::create(
			array(
			'user_id' => '3',
			'tel' => '951 520 2645',
			'cel' => '951 128 9190',
			'address' => 'Escuadrón 201 #311',
			'colonia' => 'Colonia Reforma',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'cp' => '68050',
			'country' => 'MX',
			'birthday' => '1969-06-22',
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		Profile::create(
			array(
			'user_id' => '4',
			'tel' => '',
			'cel' => '951 570 0046',
			'address' => '',
			'colonia' => '',
			'city' => 'Huayapan',
			'state' => 'Oaxaca',
			'cp' => '',
			'country' => 'MX',
			'birthday' => '1975-09-17',
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

	}

}