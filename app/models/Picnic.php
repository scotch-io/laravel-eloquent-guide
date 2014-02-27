<?php

class Fish extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled
	protected $fillable = array('name', 'taste_level');

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function bears() {
		return $this->hasMany('Bear');
	}

}