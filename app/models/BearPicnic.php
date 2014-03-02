<?php

class BearPicnic extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 2 attributes able to be filled
	protected $fillable = array('bear_id', 'picnic_id');

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	// we want to make sure that our bear picnic model can find its database table
	protected $table = 'bears_picnics';

}