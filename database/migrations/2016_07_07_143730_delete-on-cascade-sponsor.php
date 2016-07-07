<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteOnCascadeSponsor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sm_offer', function(Blueprint $table) {
			$table->dropForeign('sm_offer_sponsor_id_foreign');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sm_offer', function(Blueprint $table) {
			$table->foreign('sponsor_id')->references('id')->on('sm_sponsor')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
    }
}
