<?php

namespace App; 
use Illuminate\Database\Eloquent\Model;

class Sm_creative extends Model {

	protected $table = 'sm_creative';
	public $timestamps = true;

	public function crea()
	{
		return $this->hasOne('Sm_offer');
	}

	public function sms()
	{
		return $this->belongsTo('App\Sm_offer','id');
	}

}