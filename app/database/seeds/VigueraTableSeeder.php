<?php

class VigueraTableSeeder extends Seeder {

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
		DB::table('viguera')->delete();

		// Set timestamp for created and updated
		$rightnow = date("Y-m-d H:i:s");


		Viguera::create(
		array(
		'user_id' => '47',
		'fecha' => '2015-02-26',
		'ordinal' => '1',
		'fc' => '135',
		'tiempo' => '00:28:04',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '36',
		'fecha' => '2014-09-15',
		'ordinal' => '1',
		'fc' => '154',
		'tiempo' => '00:18:20',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '36',
		'fecha' => '2014-09-15',
		'ordinal' => '2',
		'fc' => '154',
		'tiempo' => '00:19:02',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '36',
		'fecha' => '2014-09-15',
		'ordinal' => '3',
		'fc' => '154',
		'tiempo' => '00:19:01',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '36',
		'fecha' => '2014-09-21',
		'ordinal' => '1',
		'fc' => '150',
		'tiempo' => '00:18:16',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '36',
		'fecha' => '2014-09-21',
		'ordinal' => '2',
		'fc' => '150',
		'tiempo' => '00:18:58',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '36',
		'fecha' => '2014-12-22',
		'ordinal' => '1',
		'fc' => '150',
		'tiempo' => '00:16:48',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '36',
		'fecha' => '2014-12-22',
		'ordinal' => '2',
		'fc' => '155',
		'tiempo' => '00:15:46',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '36',
		'fecha' => '2014-12-22',
		'ordinal' => '3',
		'fc' => '160',
		'tiempo' => '00:15:00',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '36',
		'fecha' => '2015-02-26',
		'ordinal' => '1',
		'fc' => '150',
		'tiempo' => '00:17:00',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '36',
		'fecha' => '2015-02-26',
		'ordinal' => '2',
		'fc' => '150',
		'tiempo' => '00:18:34',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '36',
		'fecha' => '2015-02-26',
		'ordinal' => '3',
		'fc' => '150',
		'tiempo' => '00:19:24',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '16',
		'fecha' => '2014-07-01',
		'ordinal' => '1',
		'fc' => '135',
		'tiempo' => '00:21:50',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '16',
		'fecha' => '2014-07-01',
		'ordinal' => '2',
		'fc' => '135',
		'tiempo' => '00:21:30',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '16',
		'fecha' => '2014-07-01',
		'ordinal' => '3',
		'fc' => '135',
		'tiempo' => '00:22:10',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '16',
		'fecha' => '2014-12-22',
		'ordinal' => '1',
		'fc' => '135',
		'tiempo' => '00:21:21',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '16',
		'fecha' => '2014-12-22',
		'ordinal' => '2',
		'fc' => '135',
		'tiempo' => '00:22:00',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '35',
		'fecha' => '2014-09-21',
		'ordinal' => '1',
		'fc' => '147',
		'tiempo' => '00:35:59',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '35',
		'fecha' => '2015-02-26',
		'ordinal' => '1',
		'fc' => '147',
		'tiempo' => '00:31:02',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '35',
		'fecha' => '2015-02-26',
		'ordinal' => '2',
		'fc' => '147',
		'tiempo' => '00:30:02',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '42',
		'fecha' => '2014-07-01',
		'ordinal' => '1',
		'fc' => '146',
		'tiempo' => '00:29:15',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '42',
		'fecha' => '2014-07-01',
		'ordinal' => '2',
		'fc' => '146',
		'tiempo' => '00:27:10',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '42',
		'fecha' => '2014-12-22',
		'ordinal' => '1',
		'fc' => '145',
		'tiempo' => '00:25:40',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '42',
		'fecha' => '2014-12-22',
		'ordinal' => '2',
		'fc' => '155',
		'tiempo' => '00:21:18',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '42',
		'fecha' => '2015-02-26',
		'ordinal' => '2',
		'fc' => '146',
		'tiempo' => '00:22:30',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '42',
		'fecha' => '2015-02-26',
		'ordinal' => '1',
		'fc' => '146',
		'tiempo' => '00:22:00',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '43',
		'fecha' => '2014-09-21',
		'ordinal' => '1',
		'fc' => '121',
		'tiempo' => '00:29:26',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '43',
		'fecha' => '2014-09-21',
		'ordinal' => '2',
		'fc' => '121',
		'tiempo' => '00:30:17',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '43',
		'fecha' => '2014-12-22',
		'ordinal' => '1',
		'fc' => '135',
		'tiempo' => '00:24:00',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '43',
		'fecha' => '2014-12-22',
		'ordinal' => '2',
		'fc' => '135',
		'tiempo' => '00:23:05',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '43',
		'fecha' => '2015-02-26',
		'ordinal' => '1',
		'fc' => '121',
		'tiempo' => '00:24:40',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '43',
		'fecha' => '2015-02-26',
		'ordinal' => '2',
		'fc' => '121',
		'tiempo' => '00:24:50',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '4',
		'fecha' => '2015-02-26',
		'ordinal' => '1',
		'fc' => '129',
		'tiempo' => '00:16:08',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '4',
		'fecha' => '2015-02-26',
		'ordinal' => '2',
		'fc' => '129',
		'tiempo' => '00:16:05',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '4',
		'fecha' => '2015-02-26',
		'ordinal' => '3',
		'fc' => '129',
		'tiempo' => '00:16:22',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '4',
		'fecha' => '2014-07-01',
		'ordinal' => '1',
		'fc' => '119',
		'tiempo' => '00:17:10',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '4',
		'fecha' => '2014-07-01',
		'ordinal' => '2',
		'fc' => '119',
		'tiempo' => '00:16:54',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '4',
		'fecha' => '2014-07-01',
		'ordinal' => '3',
		'fc' => '119',
		'tiempo' => '00:16:41',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '4',
		'fecha' => '2014-09-21',
		'ordinal' => '1',
		'fc' => '129',
		'tiempo' => '00:16:00',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '4',
		'fecha' => '2014-09-21',
		'ordinal' => '2',
		'fc' => '129',
		'tiempo' => '00:16:11',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '4',
		'fecha' => '2014-09-21',
		'ordinal' => '3',
		'fc' => '129',
		'tiempo' => '00:15:23',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '37',
		'fecha' => '2014-07-01',
		'ordinal' => '1',
		'fc' => '134',
		'tiempo' => '00:26:26',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '37',
		'fecha' => '2014-07-01',
		'ordinal' => '2',
		'fc' => '134',
		'tiempo' => '00:25:24',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '37',
		'fecha' => '2014-07-01',
		'ordinal' => '3',
		'fc' => '134',
		'tiempo' => '00:28:16',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '37',
		'fecha' => '2014-09-21',
		'ordinal' => '1',
		'fc' => '134',
		'tiempo' => '00:25:10',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '44',
		'fecha' => '2015-02-26',
		'ordinal' => '1',
		'fc' => '165',
		'tiempo' => '00:15:10',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '44',
		'fecha' => '2015-02-26',
		'ordinal' => '2',
		'fc' => '165',
		'tiempo' => '00:15:20',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '38',
		'fecha' => '2014-12-22',
		'ordinal' => '1',
		'fc' => '152',
		'tiempo' => '00:23:07',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '38',
		'fecha' => '2014-12-22',
		'ordinal' => '2',
		'fc' => '152',
		'tiempo' => '00:24:13',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '38',
		'fecha' => '2015-02-26',
		'ordinal' => '1',
		'fc' => '145',
		'tiempo' => '00:22:00',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '38',
		'fecha' => '2015-02-26',
		'ordinal' => '2',
		'fc' => '145',
		'tiempo' => '00:22:30',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '59',
		'fecha' => '2015-02-26',
		'ordinal' => '1',
		'fc' => '140',
		'tiempo' => '00:40:00',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '1',
		'fecha' => '2014-12-22',
		'ordinal' => '1',
		'fc' => '140',
		'tiempo' => '00:17:30',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '40',
		'fecha' => '2014-09-10',
		'ordinal' => '1',
		'fc' => '157',
		'tiempo' => '00:32:10',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '40',
		'fecha' => '2014-09-21',
		'ordinal' => '1',
		'fc' => '147',
		'tiempo' => '00:32:08',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));

		Viguera::create(
		array(
		'user_id' => '40',
		'fecha' => '2015-02-26',
		'ordinal' => '1',
		'fc' => '147',
		'tiempo' => '00:28:28',
		'created_at' => $rightnow,
		'updated_at' => $rightnow
		));
	}

}