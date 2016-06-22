<?php

class Sm_subject extends Eloquent {

	protected $table = 'sm_subject';
	public $timestamps = true;

	public function sub()
	{
		return $this->hasOne('Sm_offer');
	}

	public function subbeoffer()
	{
		return $this->belongsTo('Sm_offer');
	}

}