<?php

class Sm_sponsor extends Eloquent {

	protected $table = 'sm_sponsor';
	public $timestamps = true;

	public function sms()
	{
		return $this->hasOne('Sm_offer');
	}

	public function smbelong()
	{
		return $this->belongsTo('Sm_offer');
	}

}
