<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteOnCascade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sm_creative', function(Blueprint $table) {
			$table->dropForeign('sm_creative_offer_id_foreign');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sm_creative', function(Blueprint $table) {
			$table->foreign('offer_id')->references('id')->on('sm_offer')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
    }
}
