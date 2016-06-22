<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifierStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('sm_sponsor', function ($table) {
        $table->string('status', 50)->change();
                    });
                    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('sm_sponsor', function ($table) {
        $table->tinyinteger('status')->change();
                    });
        
    }
}
