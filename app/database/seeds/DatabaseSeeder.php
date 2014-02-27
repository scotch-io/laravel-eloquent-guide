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

		// call our class and run our seeds
		$this->call('BearAppSeeder');
		$this->command->info('Bear app seeds finished.'); // show information in the command line after everything is run
	}

}

// our own seeder class
// usually this would be its own file
class BearAppSeeder extends Seeder {
	
	public function run() {

		// clear our database ------------------------------------------
		DB::table('bears')->delete();
		DB::table('fish')->delete();
		DB::table('picnics')->delete();

		// seed our bears table -----------------------
		// we'll create three different bears

		// bear 1 is named Lawly. She is extremely dangerous. Especially when hungry.
		$bearLawly = Bear::create(array(
			'name'         => 'Lawly',
			'type'         => 'Grizzly',
			'danger_level' => 8
		));

		// bear 2 is named Cerms. He has a loud growl but is pretty much harmless.
		$bearCerms = Bear::create(array(
			'name'         => 'Cerms',
			'type'         => 'Black',
			'danger_level' => 4
		));

		// bear 3 is named Adobot. He is a polar bear. He drinks vodka.
		$bearAdobot = Bear::create(array(
			'name'         => 'Adobot',
			'type'         => 'Polar',
			'danger_level' => 3
		));

		$this->command->info('The bears are alive!');

		// seed our fish table ------------------------
		

		// seed our picnics table ---------------------

	}

}