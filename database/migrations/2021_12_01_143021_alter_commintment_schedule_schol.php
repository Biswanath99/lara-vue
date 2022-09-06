<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCommintmentScheduleSchol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commintmentScheduleSchol', function (Blueprint $table) { 
            $table->unsignedBigInteger('academicYrSessionId')->nullable();
            $table->dropColumn('status');
            $table->string('balanceAmtStatus')->nullable();
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
