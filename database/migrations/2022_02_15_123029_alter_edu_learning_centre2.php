<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterEduLearningCentre2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eduLearningCentre', function (Blueprint $table) {

            $table->unsignedBigInteger('eduLearningCentreColonyLdrId')->nullable();
            $table->unsignedBigInteger('eduLearningCentreStateLdrId')->nullable();
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
