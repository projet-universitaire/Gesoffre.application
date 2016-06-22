<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmOfferTable extends Migration {

	public function up()
	{
		Schema::create('sm_offer', function(Blueprint $table) {
			$table->increments('id');
			$table->string('type', 255);
			$table->string('label', 255);
			$table->string('country', 255);
			$table->integer('SponsorOfferId');
			$table->integer('sponsor_id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->float('payout');
			$table->string('payouttype', 45);
			$table->tinyInteger('hasSuppFile');
			$table->string('supportFileStatus', 45);
			$table->string('optIn', 45);
			$table->string('opOut', 45);
			$table->tinyInteger('status');
			$table->text('restrictions');
            $table->timestamps(); 
                        
		
		});
	}

	public function down()
	{
		Schema::drop('sm_offer');
	}
}