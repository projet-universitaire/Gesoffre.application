<?php

class Sm_from extends Eloquent {

	protected $table = 'sm_from';
	public $timestamps = true;

	public function form()
	{
		return $this->hasOne('Sm_offer');
	}

	public function formm()
	{
		return $this->belongsTo('Sm_offer');
	}

}