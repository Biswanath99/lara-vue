<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterActivity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activity', function($table)
        {
            $table->dropColumn('activityProgramName');
            $table->dropColumn('activityCategory');
            $table->dropColumn('activitySubCategory');
            $table->unsignedBigInteger('activityProgramNameId')->nullable();//FK  
            $table->unsignedBigInteger('activityCategoryId')->nullable();//FK  
            $table->unsignedBigInteger('activitySubCategoryId')->nullable();//FK  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
