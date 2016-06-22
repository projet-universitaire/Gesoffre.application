<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmCreativeTable extends Migration {

	public function up()
	{
		Schema::create('sm_creative', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('offer_id')->unsigned();
			$table->string('label', 255);
			$table->text('HtmlCode');
			$table->string('srcOut', 128);
			$table->string('srcIn', 128);
			$table->tinyInteger('status');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('sm_creative');
	}
}