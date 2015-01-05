<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username',30)->unique();
			$table->string('email',50)->unique();
			$table->string('password',60);
			$table->string('name',50);
			$table->string('lastname',50);

			$table->boolean('isactive')->default(1);
			$table->boolean('isinvisible')->default(0);
			$table->string('remember_token',100)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
