<?php

class Bear extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled
	protected $fillable = array('name', 'type', 'danger_level');

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each bear HAS one fish to eat
	public function fish() {
		return $this->hasOne('Fish'); // this matches the Eloquent model
	}

	// each bear climbs many trees
	public function trees() {
		return $this->hasMany('Tree');
	}

	// each bear BELONGS to a picnic
	public function picnics() {
		return $this->belongsToMany('Picnic', 'bears_picnics', 'bear_id', 'picnic_id');
	}

}