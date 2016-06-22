<?php

class Sm_creative extends Eloquent {

	protected $table = 'sm_creative';
	public $timestamps = true;

	public function crea()
	{
		return $this->hasOne('Sm_offer');
	}

	public function sms()
	{
		return $this->belongsTo('Sm_offer');
	}

}