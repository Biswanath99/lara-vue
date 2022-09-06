<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCommitmentScholAddNullCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

        public function up()
        {
            Schema::table('commintmentsSchol', function (Blueprint $table) { 
                $table->string('commRemarksSchol')->nullable()->change();
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
