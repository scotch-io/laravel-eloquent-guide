<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFishTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fish', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('weight'); // we'll use this to demonstrate searching by weight
			$table->integer('bear_id'); // this will contain our foreign key to the bears table

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
		Schema::drop('fish');
	}

}
