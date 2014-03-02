<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


// create our route, return a view file (app/views/eloquent.blade.php)
// we will also send the records we want to the view

Route::get('eloquent', function() {

	return View::make('eloquent')

		// all the bears (will also return the fish, trees, and picnics that belong to them)
		->with('bears', Bear::all());

});