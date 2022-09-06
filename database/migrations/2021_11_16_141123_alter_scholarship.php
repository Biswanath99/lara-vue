<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterScholarship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scholarship', function($table)
        {
            $table->unsignedBigInteger('applicationId')->nullable()->change();//FK
            $table->string('batchNo',10)->nullable();
            $table->unsignedBigInteger('offlineApplicationId')->nullable();// FK offlineApplicationDetails
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
