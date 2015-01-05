<?php

class UsersTableSeeder extends Seeder {

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
		DB::table('users')->delete();

		// Set timestamp for created and updated
		$rightnow = date("Y-m-d H:i:s");

		User::create(
			array(
			'username' => 'richard',
			'email' => 'richard@mashica.org',
			'password' => 'mashica2',
			'name' => 'Richard',
			'lastname' => 'Stoutner',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'marcello',
			'email' => 'marcello@spr-msh.com',
			'password' => 'mashica',
			'name' => 'Marcello',
			'lastname' => 'Conta',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'maritza',
			'email' => 'maritza@mashica.com',
			'password' => 'zacarracatelas',
			'name' => 'Maritza',
			'lastname' => 'Acevedo Melo',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'agomez',
			'email' => 'agomez_ruiz@hotmail.com',
			'password' => 'agomez',
			'name' => 'Alejandro',
			'lastname' => 'Gómez Ruiz',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'anavigu',
			'email' => 'anavigu@hotmail.com',
			'password' => 'anavigu',
			'name' => 'Ana Victoria',
			'lastname' => 'Gutierrez',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'porrasarenas',
			'email' => 'porrasarenas@hotmail.com',
			'password' => 'porrasarenas',
			'name' => 'Cástulo',
			'lastname' => 'Arenas Porras',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'boccaletti',
			'email' => 'boccaletti@prodigy.net.mx',
			'password' => 'boccaletti',
			'name' => 'Christian',
			'lastname' => 'Boccaletti',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'ackot',
			'email' => 'guad_sex@hotmail.com',
			'password' => 'ackot',
			'name' => 'David',
			'lastname' => 'Gómez López',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'doraluz',
			'email' => 'doraluzl@gmail.com',
			'password' => 'doraluz',
			'name' => 'Dora Luz',
			'lastname' => 'Linares Martinez',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'hugofelix',
			'email' => 'hugofelix2006@gmail.com',
			'password' => 'hugofelix',
			'name' => 'Hugo',
			'lastname' => 'Félix Clamaco',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'jaroche',
			'email' => 'jaroche@fusioncorporativa.com',
			'password' => 'jaroche',
			'name' => 'Jorge',
			'lastname' => 'Aroche Tarasco',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'spindolajorge',
			'email' => 'spindolajorge@gmail.com',
			'password' => 'spindolajorge',
			'name' => 'Jorge',
			'lastname' => 'Spindola Morales',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'juliomayoral',
			'email' => 'anime_julio@hotmail.es',
			'password' => 'juliomayoral',
			'name' => 'Julio',
			'lastname' => 'Mayoral Miranda',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'lorcha',
			'email' => 'lorcha2000@hotmail.com',
			'password' => 'lorcha',
			'name' => 'Lorena',
			'lastname' => 'Chagoya',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'chnkten',
			'email' => 'chnkten@me.com',
			'password' => 'chnkten',
			'name' => 'Luciano',
			'lastname' => 'Tenorio Vasconcelos',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'pepeoso',
			'email' => 'pepeoso69@hotmail.com',
			'password' => 'pepeoso',
			'name' => 'José',
			'lastname' => 'Canseco',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'rrossainz',
			'email' => 'rrossainz7@hotmail.com',
			'password' => 'rrossainz',
			'name' => 'Rocio',
			'lastname' => 'Rossainz Montiel',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'lucho',
			'email' => 'luchosade@hotmail.com',
			'password' => 'luchosade',
			'name' => 'Carlos',
			'lastname' => 'Suarez',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'gabrielmontes',
			'email' => 'gabrielmontesg@gmail.com',
			'password' => 'gabrielmontes',
			'name' => 'Gabriel',
			'lastname' => 'Montes García',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'memoosorio',
			'email' => 'memoosorio@hotmail.com',
			'password' => 'memoosorio',
			'name' => 'José Guillermo',
			'lastname' => 'López Osorio',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'joselo',
			'email' => 'joselo29@me.com',
			'password' => 'joselo',
			'name' => 'José Luís',
			'lastname' => 'González Ricárdez',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'juanramon',
			'email' => 'supercuervo69@hotmail.com',
			'password' => 'juanramon',
			'name' => 'Juan Ramón',
			'lastname' => 'Quevedo',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'maguilopez',
			'email' => 'magui_lopez72@hotmail.com',
			'password' => 'maguilopez',
			'name' => 'Margarita',
			'lastname' => 'López Reyes',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'moisesjuarez',
			'email' => 'moisesjuarezrodriguez@gmail.com',
			'password' => 'moises.juarez',
			'name' => 'Moisés',
			'lastname' => 'Juárez Rodríguez',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'serafin',
			'email' => 'diazrosario6@hotmail.com',
			'password' => 'diazrosario',
			'name' => 'Serafin',
			'lastname' => 'Díaz Rosario',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'benyguzman',
			'email' => 'guzman-martinez1210@live.com.mx',
			'password' => 'Benyboy.13',
			'name' => 'Benito',
			'lastname' => 'Guzman Martinez',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'carloscruz',
			'email' => 'carloselsusherotime@hotmail.com',
			'password' => 'carlosmaki',
			'name' => 'Carlos',
			'lastname' => 'Cruz Salazar',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'felipemesinas',
			'email' => 'gat_xtr@hotmail.com',
			'password' => 'mesinas1',
			'name' => 'Felipe',
			'lastname' => 'Mesinas Ruiz',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'mesinasbenjamin',
			'email' => 'mesinasbenjamin@gmail.com',
			'password' => 'mesinas2',
			'name' => 'Benjamín',
			'lastname' => 'Mesinas Ruiz',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));


		User::create(
			array(
			'username' => 'migueltiktak',
			'email' => 'mpgoaxaca@gmail.com',
			'password' => 'miguetika',
			'name' => 'Miguel',
			'lastname' => 'Pérez García',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'manuarrazola',
			'email' => 'dark-curse@hotmail.com',
			'password' => 'manuarrazola',
			'name' => 'Manuel',
			'lastname' => 'Arrazola',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'melida',
			'email' => 'memagaal28@hotmail.com',
			'password' => 'memagaal28',
			'name' => 'Mélida del Carmen',
			'lastname' => 'Magaña Álvarez',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'victorcastillejos',
			'email' => 'victorscasti@hotmail.com',
			'password' => 'victorscasti',
			'name' => 'Victor Enrique',
			'lastname' => 'Castillejos Escobar',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'leonardoguadalupe',
			'email' => 'leonardoguadalupe@hotmail.com',
			'password' => 'leonardoguadalupe',
			'name' => 'Leonardo Guadalupe',
			'lastname' => 'Ignacio',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'antoniocarrasco',
			'email' => 'aprendizcarrasco@gmail.com',
			'password' => 'aprendizcarrasco',
			'name' => 'Antonio',
			'lastname' => 'López Carrasco',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'bohorquezbernardo',
			'email' => 'bohorquezbernardo@gmail.com',
			'password' => 'bohorquezbernardo',
			'name' => 'Bernardo',
			'lastname' => 'Bohorquez',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'chicoaventura',
			'email' => 'gramaoaxaca@hotmail.com',
			'password' => 'chicoaventura',
			'name' => 'Eduardo Alberto',
			'lastname' => 'Guevara Saldaña',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'elimatos23',
			'email' => 'elimatos23@gmail.com',
			'password' => 'elimatos23',
			'name' => 'Eli',
			'lastname' => 'Pérez Matos',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'laiker_sonder',
			'email' => 'laiker_sonder@hotmail.com',
			'password' => 'laiker_sonder',
			'name' => 'Eliseo',
			'lastname' => 'García Gaytan',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'jht44',
			'email' => 'jht44@hotmail.com',
			'password' => 'jht44',
			'name' => 'Jerónimo',
			'lastname' => 'Hernández Topete',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'danielspdmhn',
			'email' => 'daniels.pdmhn@gmail.com',
			'password' => 'daniels',
			'name' => 'Pedro Daniel',
			'lastname' => 'Manuel Hernández',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'castellanosmonteagudo',
			'email' => 'castellanosmonteagudo@hotmail.com',
			'password' => 'castellanosmonteagudo',
			'name' => 'José Manuel',
			'lastname' => 'Castellanos Monteagudo',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'ricue',
			'email' => 'ricue@yahoo.com',
			'password' => 'ricue',
			'name' => 'Ricardo',
			'lastname' => 'Cuevas Carrasco',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'salva_dani98',
			'email' => 'salva_dani98@hotmail.com',
			'password' => 'salva_dani98',
			'name' => 'Salvador Daniel',
			'lastname' => 'Hernández',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'francojm',
			'email' => 'kisfran_19ali@hotmail.com',
			'password' => 'francojm',
			'name' => 'Franco',
			'lastname' => 'Jiménez Mejía',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'jaredas',
			'email' => 'joseayala@prodigy.net.mx',
			'password' => 'jaredayalasaavedra',
			'name' => 'Jared',
			'lastname' => 'Ayala Saavedra',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'zavaletahernandez',
			'email' => 'drageorginasaavedra@hotmail.com',
			'password' => 'zavaletahernandez',
			'name' => 'José y Georgina',
			'lastname' => 'Ayala y Saavedra',
			'isactive' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'ddanibejarano',
			'email' => 'ddani_184@hotmail.com',
			'password' => 'ddani',
			'name' => 'Daniela',
			'lastname' => 'Bejarano Vallegas',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'alantorres',
			'email' => 'alan_2801@hotmail.com',
			'password' => 'alanarreortua',
			'name' => 'Alan',
			'lastname' => 'Arreortua Torres',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'miguelangelmontes',
			'email' => 'miguel_30stm@hotmail.com',
			'password' => 'miguelangelmontes',
			'name' => 'Miguel Angel',
			'lastname' => 'Montes Lorenzo',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'username' => 'nomelygijon',
			'email' => 'nomelygi@hotmail.com',
			'password' => 'nomelyescas',
			'name' => 'Nomely',
			'lastname' => 'Gijon Yescas',
			'isactive' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));



	}

}