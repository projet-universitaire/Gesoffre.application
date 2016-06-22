<?php

class Sm_offer_update extends Eloquent {

	protected $table = 'sm_offer_update';
	public $timestamps = true;

	public function update()
	{
		return $this->hasOne('Sm_offer');
	}

	public function upda_offer_belong()
	{
		return $this->belongsTo('Sm_offer');
	}

}