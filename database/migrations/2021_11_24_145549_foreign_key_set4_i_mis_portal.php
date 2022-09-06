<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeySet4IMisPortal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offlineApplicationDetails', function (Blueprint $table) {
            $table->foreign('applicantAddressId')->references('id')->on('portalAddress')->onDelete('cascade');
        });

        Schema::table('offlineApplicationDetails', function (Blueprint $table) {
            $table->foreign('courseLevelValueId')->references('id')->on('domainValues')->onDelete('cascade');
        });

        Schema::table('offlineApplicationDetails', function (Blueprint $table) {
            $table->foreign('scholarshipTypeValueId')->references('id')->on('domainValues')->onDelete('cascade');
        });

        Schema::table('offlineApplicationDetails', function (Blueprint $table) {
            $table->foreign('sessionId')->references('id')->on('applicationSession')->onDelete('cascade');
        });

        Schema::table('offlineApplicationDetails', function (Blueprint $table) {
            $table->foreign('appSchduleId')->references('id')->on('applicationScheduleTable')->onDelete('cascade');
        });

        Schema::table('offlineApplicationDetails', function (Blueprint $table) {
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('scholarship', function (Blueprint $table) {
            $table->foreign('offlineApplicationId')->references('id')->on('offlineApplicationDetails')->onDelete('cascade');
        });

        Schema::table('offlineApplicationDetails', function (Blueprint $table) {
            $table->foreign('courseNameValueId')->references('id')->on('domainValues')->onDelete('cascade');
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
