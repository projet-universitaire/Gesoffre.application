<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmOfferUpdateTable extends Migration {

	public function up()
	{
		Schema::create('sm_offer_update', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('offer_id')->unsigned();
			$table->string('comment', 255);
			$table->datetime('lastupdate');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('sm_offer_update');
	}
}