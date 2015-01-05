<?php

class PesosTableSeeder extends Seeder {

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
		DB::table('pesos')->delete();

		// Set timestamp for created and updated
		$rightnow = date("Y-m-d H:i:s");


		Peso::create(
		array(
		'user_id' => '4',
		'fecha' => '2014-02-01',
		'peso' => '72.8',
		'grasa' => '19.4',
		'musculo' => '55.8',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));
		Peso::create(
		array(
		'user_id' => '4',
		'fecha' => '2014-03-01',
		'peso' => '73.4',
		'grasa' => '18.7',
		'musculo' => '56.6',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-04-01',
		'peso' 			=> '71.8',
		'grasa' 		=> '16.8',
		'musculo' 		=> '56.8',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-05-01',
		'peso' 			=> '72.6',
		'grasa' 		=> '15.6',
		'musculo' 		=> '58.2',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-05-29',
		'peso' 			=> '71.8',
		'grasa' 		=> '18.0',
		'musculo' 		=> '56',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-06-27',
		'peso' 			=> '70.8',
		'grasa' 		=> '17.3',
		'musculo' 		=> '55.7',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-07-03',
		'peso' 			=> '70.3',
		'grasa' 		=> '18.0',
		'musculo' 		=> '54.8',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-07-17',
		'peso' 			=> '70.1',
		'grasa' 		=> '17.6',
		'musculo' 		=> '54.9',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-08-21',
		'peso' 			=> '70.6',	
		'grasa' 		=> '18.6',
		'musculo' 		=> '54.6',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-09-09',
		'peso' 			=> '69.8',	
		'grasa' 		=> '9.60',
		'musculo' 		=> '60.0',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-09-11',
		'peso' 			=> '70.3',	
		'grasa' 		=> '17.2',
		'musculo' 		=> '55.3',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-09-25',
		'peso' 			=> '69.9',	
		'grasa' 		=> '9.40',
		'musculo' 		=> '60.1',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-10-16',
		'peso' 			=> '69.9',	
		'grasa' 		=> '20.1',
		'musculo' 		=> '53',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-10-28',
		'peso' 			=> '70.0',	
		'grasa' 		=> '17.9',
		'musculo' 		=> '54.6',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-11-06',
		'peso' 			=> '70.0',	
		'grasa' 		=> '17.0',
		'musculo' 		=> '52.2',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-11-27',
		'peso' 			=> '71.1',	
		'grasa' 		=> '19.2',
		'musculo' 		=> '54.5',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-12-04',
		'peso' 			=> '70.7',	
		'grasa' 		=> '19.1',
		'musculo' 		=> '54.4',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));
		Peso::create(
		array(
		'user_id'		=> '4',
		'fecha'			=> '2014-12-18',
		'peso' 			=> '69.5',	
		'grasa' 		=> '18.3',
		'musculo' 		=> '54.0',
		'created_at' 	=> $rightnow,
		'updated_at' 	=> $rightnow
		));


	// new
		Peso::create(
		array(
		'user_id'		=> '11', //Jorge	Aroche					
		'fecha'			=> '2014-4-1',	
		'peso'			=> '79.7',	
		'grasa'			=> '21.5',	
		'musculo' 		=> '59.4',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '48', //Daniela	Bejarano
		'fecha'			=> '2014-3-1',	
		'peso'			=> '38.9',	
		'grasa'			=> '16.2',	
		'musculo' 		=> '30.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '48', //Daniela	Bejarano
		'fecha'			=> '2014-8-21',	
		'peso'			=> '37.8',	
		'grasa'			=> '5',		
		'musculo' 		=> '34',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));													

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-2-1',	
		'peso'			=> '86.7',	
		'grasa'			=> '25.4',	
		'musculo' 		=> '61.5',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-3-1',	
		'peso'			=> '86.3',	
		'grasa'			=> '25.7',	
		'musculo' 		=> '60.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-4-1',	
		'peso'			=> '88.3',	
		'grasa'			=> '26.7',	
		'musculo' 		=> '61.5',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-5-1',	
		'peso'			=> '87.3',	
		'grasa'			=> '24.2',	
		'musculo' 		=> '62.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-5-29',	
		'peso'			=> '83.9',	
		'grasa'			=> '24.4',	
		'musculo' 		=> '60.3',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-6-27',	
		'peso'			=> '84.7',	
		'grasa'			=> '21.3',	
		'musculo' 		=> '63.3',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-7-3',	
		'peso'			=> '83',		
		'grasa'			=> '25',		
		'musculo' 		=> '59.2',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-7-17',	
		'peso'			=> '84.3',	
		'grasa'			=> '24.8',	
		'musculo' 		=> '60.2',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-9-9',	
		'peso'			=> '81.7',	
		'grasa'			=> '21.4',	
		'musculo' 		=> '59.5',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-9-25',	
		'peso'			=> '82.1',	
		'grasa'			=> '23.4',	
		'musculo' 		=> '59.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-10-7',	
		'peso'			=> '82.7',	
		'grasa'			=> '22.5',	
		'musculo' 		=> '60.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-10-16',	
		'peso'			=> '82.8',	
		'grasa'			=> '24.4',	
		'musculo' 		=> '59.4',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-10-28',	
		'peso'			=> '83.2',	
		'grasa'			=> '22.5',	
		'musculo' 		=> '61.2',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-11-6',	
		'peso'			=> '82.4',	
		'grasa'			=> '24.1',	
		'musculo' 		=> '59.5',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-11-27',	
		'peso'			=> '82.8',	
		'grasa'			=> '23.9',	
		'musculo' 		=> '59.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-12-4',	
		'peso'			=> '82.6',	
		'grasa'			=> '25',		
		'musculo' 		=> '58.8',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-12-18',	
		'peso'			=> '83.9',	
		'grasa'			=> '25.7',	
		'musculo' 		=> '59.3',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '16', //José	Canseco
		'fecha'			=> '2014-8-21',	
		'peso'			=> '83',		
		'grasa'			=> '24.4',	
		'musculo' 		=> '59.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '35', //Antonio	Carrasco
		'fecha'			=> '2014-7-8',	
		'peso'			=> '122.5',	
		'grasa'			=> '37',		
		'musculo' 		=> '73.5',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '35', //Antonio	Carrasco
		'fecha'			=> '2014-7-24',	
		'peso'			=> '119.9',	
		'grasa'			=> '36.2',	
		'musculo' 		=> '72.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '35', //Antonio	Carrasco
		'fecha'			=> '2014-9-4',	
		'peso'			=> '120.1',	
		'grasa'			=> '34.9',	
		'musculo' 		=> '74.3',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '35', //Antonio	Carrasco
		'fecha'			=> '2014-9-9',	
		'peso'			=> '120.2',	
		'grasa'			=> '34.1',	
		'musculo' 		=> '75.4',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '35', //Antonio	Carrasco
		'fecha'			=> '2014-9-25',	
		'peso'			=> '118.8',	
		'grasa'			=> '34.8',	
		'musculo' 		=> '73.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '35', //Antonio	Carrasco
		'fecha'			=> '2014-10-7',	
		'peso'			=> '119.6',	
		'grasa'			=> '34.3',	
		'musculo' 		=> '74.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '35', //Antonio	Carrasco
		'fecha'			=> '2014-10-16',	
		'peso'			=> '117.7',	
		'grasa'			=> '35.1',	
		'musculo' 		=> '72.6',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '35', //Antonio	Carrasco
		'fecha'			=> '2014-10-28',	
		'peso'			=> '120.5',	
		'grasa'			=> '35.6',	
		'musculo' 		=> '73.8',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '35', //Antonio	Carrasco
		'fecha'			=> '2014-11-6',	
		'peso'			=> '122.6',	
		'grasa'			=> '35.2',	
		'musculo' 		=> '75.6',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '35', //Antonio	Carrasco
		'fecha'			=> '2014-11-27',	
		'peso'			=> '123.8',	
		'grasa'			=> '36.5',	
		'musculo' 		=> '74.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '35', //Antonio	Carrasco
		'fecha'			=> '2014-12-4',	
		'peso'			=> '122.2',	
		'grasa'			=> '36.7',	
		'musculo' 		=> '73.5',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '35', //Antonio	Carrasco
		'fecha'			=> '2014-12-18',	
		'peso'			=> '122.6',	
		'grasa'			=> '36.9',	
		'musculo' 		=> '73.6',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-5-29',	
		'peso'			=> '75.2',	
		'grasa'			=> '22.2',	
		'musculo' 		=> '55.6',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-6-27',	
		'peso'			=> '74.8',	
		'grasa'			=> '22.2',	
		'musculo' 		=> '55.3',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-7-3',	
		'peso'			=> '74.1',	
		'grasa'			=> '23.9',	
		'musculo' 		=> '53.6',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-7-17',	
		'peso'			=> '73.9',	
		'grasa'			=> '23.1',	
		'musculo' 		=> '54',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));													

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-8-21',	
		'peso'			=> '72.3',	
		'grasa'			=> '22',		
		'musculo' 		=> '53.6',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-9-9',	
		'peso'			=> '71.2',	
		'grasa'			=> '21.9',	
		'musculo' 		=> '52.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-9-25',	
		'peso'			=> '70.8',	
		'grasa'			=> '22.6',	
		'musculo' 		=> '52',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));													

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-10-7',	
		'peso'			=> '73.1',	
		'grasa'			=> '20.7',	
		'musculo' 		=> '55.1',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-10-16',	
		'peso'			=> '70.6',	
		'grasa'			=> '22.6',	
		'musculo' 		=> '51.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-10-28',	
		'peso'			=> '72.3',	
		'grasa'			=> '21.3',	
		'musculo' 		=> '54.1',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-11-6',	
		'peso'			=> '70.9',	
		'grasa'			=> '22',		
		'musculo' 		=> '52.5',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-11-27',	
		'peso'			=> '70.9',	
		'grasa'			=> '22.9',	
		'musculo' 		=> '51.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-12-4',	
		'peso'			=> '70.7',	
		'grasa'			=> '21.9',	
		'musculo' 		=> '52.4',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '42', //José	Castellanos Monteagudo
		'fecha'			=> '2014-12-18',	
		'peso'			=> '70.9',	
		'grasa'			=> '23',		
		'musculo' 		=> '51.8',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '27', //Carlos	Cruz Salazar
		'fecha'			=> '2014-7-3',	
		'peso'			=> '67',		
		'grasa'			=> '21.9',	
		'musculo' 		=> '49.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '27', //Carlos	Cruz Salazar
		'fecha'			=> '2014-9-9',	
		'peso'			=> '68.2',	
		'grasa'			=> '19.2',	
		'musculo' 		=> '52.3',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '27', //Carlos	Cruz Salazar
		'fecha'			=> '2014-10-16',	
		'peso'			=> '66.7',	
		'grasa'			=> '21.1',	
		'musculo' 		=> '49.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '27', //Carlos	Cruz Salazar
		'fecha'			=> '2014-10-28',	
		'peso'			=> '68.2',	
		'grasa'			=> '19.6',	
		'musculo' 		=> '52.1',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '27', //Carlos	Cruz Salazar
		'fecha'			=> '2014-11-6',	
		'peso'			=> '66.9',	
		'grasa'			=> '19.7',	
		'musculo' 		=> '51',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));													

		Peso::create(
		array(
		'user_id'		=> '27', //Carlos	Cruz Salazar
		'fecha'			=> '2014-11-27',	
		'peso'			=> '67.4',	
		'grasa'			=> '20.4',	
		'musculo' 		=> '50.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '43', //Ricardo	Cuevas
		'fecha'			=> '2014-9-25',	
		'peso'			=> '93.2',	
		'grasa'			=> '22.5',	
		'musculo' 		=> '68.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '43', //Ricardo	Cuevas
		'fecha'			=> '2014-10-7',	
		'peso'			=> '91.6',	
		'grasa'			=> '22.9',	
		'musculo' 		=> '67.1',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '43', //Ricardo	Cuevas
		'fecha'			=> '2014-10-16',	
		'peso'			=> '91.2',	
		'grasa'			=> '23.3',	
		'musculo' 		=> '66.6',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '43', //Ricardo	Cuevas
		'fecha'			=> '2014-10-28',	
		'peso'			=> '92.4',	
		'grasa'			=> '22.9',	
		'musculo' 		=> '67.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '43', //Ricardo	Cuevas
		'fecha'			=> '2014-11-6',	
		'peso'			=> '91.9',	
		'grasa'			=> '22.5',	
		'musculo' 		=> '67.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '43', //Ricardo	Cuevas
		'fecha'			=> '2014-11-27',	
		'peso'			=> '93',		
		'grasa'			=> '24.2',	
		'musculo' 		=> '67',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));													

		Peso::create(
		array(
		'user_id'		=> '43', //Ricardo	Cuevas
		'fecha'			=> '2014-12-18',	
		'peso'			=> '94.2',	
		'grasa'			=> '24.1',	
		'musculo' 		=> '68',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));													

		Peso::create(
		array(
		'user_id'		=> '39', //Eliseo	García Gaytan
		'fecha'			=> '2014-7-17',	
		'peso'			=> '59.3',	
		'grasa'			=> '5.1',		
		'musculo' 		=> '53.5',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '39', //Eliseo	García Gaytan
		'fecha'			=> '2014-9-2',	
		'peso'			=> '58.2',	
		'grasa'			=> '5',		
		'musculo' 		=> '52.5',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '51', //Nomely	Gijon
		'fecha'			=> '2014-3-27',	
		'peso'			=> '67.6',	
		'grasa'			=> '15.6',	
		'musculo' 		=> '54.2',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '8', //David	Gomez Lopez
		'fecha'			=> '2014-2-1',	
		'peso'			=> '62.3',	
		'grasa'			=> '13.9',	
		'musculo' 		=> '50.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '8', //David	Gomez Lopez
		'fecha'			=> '2014-3-1',	
		'peso'			=> '61.6',	
		'grasa'			=> '15.3',	
		'musculo' 		=> '49.5',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '8', //David	Gomez Lopez
		'fecha'			=> '2014-4-1',	
		'peso'			=> '62.7',	
		'grasa'			=> '14.1',	
		'musculo' 		=> '51.2',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '8', //David	Gomez Lopez
		'fecha'			=> '2014-5-1',	
		'peso'			=> '61.7',	
		'grasa'			=> '14.2',	
		'musculo' 		=> '50.3',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '8', //David	Gomez Lopez
		'fecha'			=> '2014-12-18',	
		'peso'			=> '63.5',	
		'grasa'			=> '15.6',	
		'musculo' 		=> '50.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '37', //Eduardo	Guevara Saldaña
		'fecha'			=> '2014-7-3',	
		'peso'			=> '84.8',	
		'grasa'			=> '20.8',	
		'musculo' 		=> '63.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '37', //Eduardo	Guevara Saldaña
		'fecha'			=> '2014-10-16',	
		'peso'			=> '83.1',	
		'grasa'			=> '20.1',	
		'musculo' 		=> '62.6',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '37', //Eduardo	Guevara Saldaña
		'fecha'			=> '2014-10-28',	
		'peso'			=> '82.1',	
		'grasa'			=> '21.3',	
		'musculo' 		=> '61.4',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '37', //Eduardo	Guevara Saldaña
		'fecha'			=> '2014-11-27',	
		'peso'			=> '82.1',	
		'grasa'			=> '22.3',	
		'musculo' 		=> '60.6',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '44', //Salvador Daniel	Hernandez Gomez
		'fecha'			=> '2014-9-2',	
		'peso'			=> '53',		
		'grasa'			=> '7.9',		
		'musculo' 		=> '46.4',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '44', //Salvador Daniel	Hernandez Gomez
		'fecha'			=> '2014-10-22',	
		'peso'			=> '60.7',	
		'grasa'			=> '12',		
		'musculo' 		=> '50.8',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '41', //Pedro Daniel Manuel Hernandez
		'fecha'			=> '2014-3-26',	
		'peso'			=> '52.2',	
		'grasa'			=> '5.4',		
		'musculo' 		=> '46.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '41', //Pedro Daniel Manuel Hernandez
		'fecha'			=> '2014-4-2',	
		'peso'			=> '52.1',	
		'grasa'			=> '5',		
		'musculo' 		=> '47',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));													

		Peso::create(
		array(
		'user_id'		=> '41', //Pedro Daniel Manuel Hernandez
		'fecha'			=> '2014-8-21',	
		'peso'			=> '52.6',	
		'grasa'			=> '6.2',		
		'musculo' 		=> '46.8',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '41', //Pedro Daniel Manuel Hernandez
		'fecha'			=> '2014-9-2',	
		'peso'			=> '60.8',	
		'grasa'			=> '11.6',	
		'musculo' 		=> '51.1',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '41', //Pedro Daniel Manuel Hernandez
		'fecha'			=> '2014-10-22',	
		'peso'			=> '54.5',	
		'grasa'			=> '6.5',		
		'musculo' 		=> '48.3',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '50', //Miguel Angel	Montes Lorenzo
		'fecha'			=> '2014-3-26',	
		'peso'			=> '56.3',	
		'grasa'			=> '5',		
		'musculo' 		=> '50.8',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-5-1',	
		'peso'			=> '78.7',	
		'grasa'			=> '21.9',	
		'musculo' 		=> '58.4',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-5-29',	
		'peso'			=> '78',		
		'grasa'			=> '21.4',	
		'musculo' 		=> '58.2',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-6-27',	
		'peso'			=> '75.6',	
		'grasa'			=> '21.9',	
		'musculo' 		=> '56.1',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-7-17',	
		'peso'			=> '74.7',	
		'grasa'			=> '21.2',	
		'musculo' 		=> '55.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-8-21',	
		'peso'			=> '73.7',	
		'grasa'			=> '21.7',	
		'musculo' 		=> '54.8',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-9-9',	
		'peso'			=> '74',		
		'grasa'			=> '20.4',	
		'musculo' 		=> '55.9',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-9-25',	
		'peso'			=> '74.3',	
		'grasa'			=> '20.1',	
		'musculo' 		=> '56.4',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-10-7',	
		'peso'			=> '74.7',	
		'grasa'			=> '20.2',	
		'musculo' 		=> '56.6',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-10-16',	
		'peso'			=> '73.5',	
		'grasa'			=> '20.3',	
		'musculo' 		=> '55.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-10-28',	
		'peso'			=> '73.2',	
		'grasa'			=> '19.9',	
		'musculo' 		=> '55.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-11-27',	
		'peso'			=> '73.4',	
		'grasa'			=> '22.3',	
		'musculo' 		=> '54.1',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-12-4',	
		'peso'			=> '73.2',	
		'grasa'			=> '20.4',	
		'musculo' 		=> '55.4',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '38', //Eli	Perez Matos
		'fecha'			=> '2014-12-18',	
		'peso'			=> '73.2',	
		'grasa'			=> '22.3',	
		'musculo' 		=> '54',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));													

		Peso::create(
		array(
		'user_id'		=> '22', //Juan Ramón 	Quevedo
		'fecha'			=> '2014-4-1',	
		'peso'			=> '81.1',	
		'grasa'			=> '21.9',	
		'musculo' 		=> '60.2',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '12', //Jorge	Spindola
		'fecha'			=> '2014-4-1',	
		'peso'			=> '77.5',	
		'grasa'			=> '25.7',	
		'musculo' 		=> '54.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '40', //Jerónimo	Topete Hernandez
		'fecha'			=> '2014-10-22',	
		'peso'			=> '73.2',	
		'grasa'			=> '17.2',	
		'musculo' 		=> '57.6',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '49', //Alan	Torres
		'fecha'			=> '2014-3-26',	
		'peso'			=> '71.9',	
		'grasa'			=> '21.2',	
		'musculo' 		=> '53.8',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));												

		Peso::create(
		array(
		'user_id'		=> '49', //Alan	Torres
		'fecha'			=> '2014-4-2',	
		'peso'			=> '70.6',	
		'grasa'			=> '22.8',	
		'musculo' 		=> '51.7',
		'created_at'	=> $rightnow,
		'updated_at'	=> $rightnow
		));																						





	}

}