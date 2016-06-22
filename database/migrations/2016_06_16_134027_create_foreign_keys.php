<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('sm_offer_update', function(Blueprint $table) {
			$table->foreign('offer_id')->references('id')->on('sm_offer')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sm_subject', function(Blueprint $table) {
			$table->foreign('offer_id')->references('id')->on('sm_offer')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sm_from', function(Blueprint $table) {
			$table->foreign('offer_id')->references('id')->on('sm_offer')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sm_creative', function(Blueprint $table) {
			$table->foreign('offer_id')->references('id')->on('sm_offer')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sm_landingPage', function(Blueprint $table) {
			$table->foreign('offer_id')->references('id')->on('sm_offer')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sm_offer', function(Blueprint $table) {
			$table->foreign('sponsor_id')->references('id')->on('sm_sponsor')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sm_offer', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('sm_categorie')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('sm_offer_update', function(Blueprint $table) {
			$table->dropForeign('sm_offer_update_offer_id_foreign');
		});
		Schema::table('sm_subject', function(Blueprint $table) {
			$table->dropForeign('sm_subject_offer_id_foreign');
		});
		Schema::table('sm_from', function(Blueprint $table) {
			$table->dropForeign('sm_from_offer_id_foreign');
		});
		Schema::table('sm_creative', function(Blueprint $table) {
			$table->dropForeign('sm_creative_offer_id_foreign');
		});
		Schema::table('sm_landingPage', function(Blueprint $table) {
			$table->dropForeign('sm_landingPage_offer_id_foreign');
		});
		Schema::table('sm_offer', function(Blueprint $table) {
			$table->dropForeign('sm_offer_sponsor_id_foreign');
		});
		Schema::table('sm_offer', function(Blueprint $table) {
			$table->dropForeign('sm_offer_category_id_foreign');
		});
	}
}