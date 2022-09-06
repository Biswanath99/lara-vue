<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFamilyMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('familyMembers', function (Blueprint $table) {
            $table->string('familyMembersProjectMonitoringLeader',30)->nullable();
            $table->string('familyMembersProjectMonitoringStatus',30)->nullable();
            $table->float('familyMembersTotalAmtRcvd')->nullable();
            $table->string('familyMembersMouFileAttachments')->nullable();
            $table->string('familyMemberEngType',30)->nullable()->change();
            $table->string('familyMemberLandPatta',30)->nullable()->change();
  
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
