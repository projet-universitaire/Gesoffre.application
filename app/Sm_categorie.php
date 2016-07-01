<?php

class Sm_categorie extends Eloquent {

	protected $table = 'sm_categorie';
	public $timestamps = true;

	public function categoryoffer()
	{
		return $this->belongsTo('Sm_offer');
	}

	public function cat()
	{
		return $this->hasOne('\Sm_offer');
	}

}
