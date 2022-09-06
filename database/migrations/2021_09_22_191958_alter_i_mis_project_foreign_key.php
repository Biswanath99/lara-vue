<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterIMisProjectForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('eduLearningCentre', function (Blueprint $table) {
        //     $table->foreign('eduLearningCentreDonorId')->references('id')->on('donors')->onDelete('cascade');
        // });

        // Schema::table('eduLearningCentre', function (Blueprint $table) {
        //     $table->foreign('eduLearningCentreDonationId')->references('id')->on('donations')->onDelete('cascade');
        // });

        // Schema::table('eduLearningCentre', function (Blueprint $table) {
        //     $table->foreign('eduLearningCentreColonyId')->references('id')->on('colony')->onDelete('cascade');
        // });

        // Schema::table('eduLearningCentre', function (Blueprint $table) {
        //     $table->foreign('eduLearningCentreAddressId')->references('id')->on('address')->onDelete('cascade');
        // });

        // Schema::table('eduLearningCentre', function (Blueprint $table) {
        //     $table->foreign('eduLearningCentreEmployeeId')->references('id')->on('employee')->onDelete('cascade');
        // });

        // Schema::table('eduLearningCentre', function (Blueprint $table) {
        //     $table->foreign('eduLearningCentreEmployeeHeadId')->references('id')->on('employee')->onDelete('cascade');
        // });

        // Schema::table('eduLearningCentre', function (Blueprint $table) {
        //     $table->foreign('eduLearningCentrePartnerMemberId')->references('id')->on('partnerMembers')->onDelete('cascade');
        // });

        // Schema::table('eduLearningStudentCount', function (Blueprint $table) {
        //     $table->foreign('eduLearningCentreId')->references('id')->on('eduLearningCentre')->onDelete('cascade');
        // });

        // // Schema::table('eduLearningStudentCount', function (Blueprint $table) {
        // //     $table->foreign('sessionId')->references('id')->on('applicationSession')->onDelete('cascade');
        // // });

        // Schema::table('eduLearningStaff', function (Blueprint $table) {
        //     $table->foreign('eduLearningStaffCentreId')->references('id')->on('eduLearningCentre')->onDelete('cascade');
        // });

        // Schema::table('eduLearningStaff', function (Blueprint $table) {
        //     $table->foreign('eduLearningStaffEmployeeId')->references('id')->on('employee')->onDelete('cascade');
        // });

        // Schema::table('cnaEventsGallery', function (Blueprint $table) {
        //     $table->foreign('cnaEventsId')->references('id')->on('cnaEvents')->onDelete('cascade');
        // });

        Schema::table('cnaDocuments', function (Blueprint $table) {
            $table->foreign('cnaEventsId')->references('id')->on('cnaEvents')->onDelete('cascade');
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
