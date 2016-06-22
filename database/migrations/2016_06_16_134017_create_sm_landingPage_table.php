<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmLandingPageTable extends Migration {

	public function up()
	{
		Schema::create('sm_landingPage', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('offer_id')->unsigned();
			$table->string('domain', 255);
			$table->string('package', 255);
			$table->string('thumbnail', 255);
			$table->string('status', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('sm_landingPage');
	}
}