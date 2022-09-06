<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterEduLearningCentre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eduLearningCentre', function ($table) {
            $table->unsignedBigInteger('eduLearningCentreDonorId')->nullable()->change();
            $table->unsignedBigInteger('eduLearningCentreDonationId')->nullable()->change();
            $table->unsignedBigInteger('eduLearningCentreColonyId')->nullable()->change();
            $table->unsignedBigInteger('eduLearningCentreAddressId')->nullable()->change();
            $table->unsignedBigInteger('eduLearningCentreEmployeeId')->nullable()->change();
            $table->unsignedBigInteger('eduLearningCentreEmployeeHeadId')->nullable()->change();
            $table->unsignedBigInteger('eduLearningCentrePartnerMemberId')->nullable()->change();
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
