<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCommitmentSchSchol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commintmentScheduleSchol', function (Blueprint $table) {
            $table->unsignedBigInteger('academicYrId')->nullable();
            $table->unsignedBigInteger('commIdSchol')->nullable()->change();  
            $table->unsignedBigInteger('currencyId')->nullable()->change();  
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
