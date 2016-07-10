<?php

namespace App; 
use Illuminate\Database\Eloquent\Model;



class Sm_offer extends Model {

	protected $table = 'sm_offer';
	public $timestamps = true;
   
        public function creative()
	{
		return $this->hasMany('App\Sm_creative','offer_id');
	}
}