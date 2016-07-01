<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFormsAndSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sm_offer', function ($table) {
        $table->string('forms',255);
        $table->string('subjects',255);
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sm_offer', function ($table) {
        $table->dropColumn('forms');
        $table->dropColumn('subjects');
});
    }
}
