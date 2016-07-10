<?php
namespace App; 
use Illuminate\Database\Eloquent\Model;

class Sm_categorie extends Model {

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
