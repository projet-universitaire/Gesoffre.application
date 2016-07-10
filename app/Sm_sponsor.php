<?php
namespace App; 
use Illuminate\Database\Eloquent\Model;

class Sm_sponsor extends Model {

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
