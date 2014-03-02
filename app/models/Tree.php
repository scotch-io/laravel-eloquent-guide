<?php

class Tree extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled
	protected $fillable = array('type', 'height', 'bear_id');

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function bear() {
		return $this->belongsTo('Bear');
	}

}