<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter3ApplicationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applicationDetails', function (Blueprint $table) {
            $table->unsignedBigInteger('currentSessionId')->nullable();
        });
        
        Schema::table('applicationDetails', function (Blueprint $table) {
            $table->unique([
            "scholarshipTypeValueId",
            "currentSessionId",
            "applicantNameF",
            "applicantNameL",
            "applicantDOB"], "check_duplicate_application");
        });

        Schema::table('applicationDetails', function (Blueprint $table) {
            $table->dropUnique('application_index');
        });

        Schema::table('offlineApplicationDetails', function (Blueprint $table) {
            $table->unique([
            "scholarshipTypeValueId",
            "sessionId",
            "applicantNameF",
            "applicantNameL",
            "applicantDOB"], "check_duplicate_offline_application");
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
