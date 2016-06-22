<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmSponsorTable extends Migration {

	public function up()
	{
		Schema::create('sm_sponsor', function(Blueprint $table) {
			$table->increments('id');
			$table->string('label', 255);
			$table->string('Website', 255);
			$table->string('login', 100);
			$table->string('password', 100);
			$table->tinyInteger('status');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('sm_sponsor');
	}
}