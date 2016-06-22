<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmFromTable extends Migration {

	public function up()
	{
		Schema::create('sm_from', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('offer_id')->unsigned();
			$table->string('label', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('sm_from');
	}
}