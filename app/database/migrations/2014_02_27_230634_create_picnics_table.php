<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicnicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('picnics', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name');
			$table->integer('taste_level'); // just some random variable we wont need for this tutorial

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('picnics');
	}

}
