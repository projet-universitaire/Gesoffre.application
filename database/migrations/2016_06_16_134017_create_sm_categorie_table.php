<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmCategorieTable extends Migration {

	public function up()
	{
		Schema::create('sm_categorie', function(Blueprint $table) {
			$table->increments('id');
			$table->string('label', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('sm_categorie');
	}
}