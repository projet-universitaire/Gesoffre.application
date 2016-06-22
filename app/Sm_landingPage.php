<?php

class Sm_landingPage extends Eloquent {

	protected $table = 'sm_landingPage';
	public $timestamps = true;

	public function sm()
	{
		return $this->hasOne('Sm_offer');
	}

	public function smlandingbelong()
	{
		return $this->belongsTo('Sm_offer');
	}

}