<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->text('bio')->nullable();
			$table->string('tel',30)->nullable();
			$table->string('cel',30)->nullable();
			$table->string('address',50)->nullable();
			$table->string('colonia',50)->nullable();
			$table->string('city',50)->nullable();
			$table->string('state',50)->nullable();
			$table->string('cp',10)->nullable();
			$table->string('country',2)->nullable();
			$table->date('birthday')->nullable();
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
