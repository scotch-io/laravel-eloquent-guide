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


Route::get('eloquent', function()
{
	// find a bear named Adobot
	$adobot = Bear::where('name', '=', 'Adobot')->first();

	// get the fish that Adobot has
	$fish = $adobot->fish;

	// get the weight of the fish
	$fish->weight;

	print_r($adobot->picnic);
});