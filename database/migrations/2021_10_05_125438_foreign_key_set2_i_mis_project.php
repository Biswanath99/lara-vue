<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeySet2IMisProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // #Foreign key for lvhProposals
        // Schema::table('lvhProposals', function (Blueprint $table) {
        //     $table->foreign('parentPropId')->references('id')->on('lvhProposals')->onDelete('cascade');
        // });
        // Schema::table('lvhProposals', function (Blueprint $table) {
        //     $table->foreign('colonyId')->references('id')->on('colony')->onDelete('cascade');
        // });
        // Schema::table('lvhProposals', function (Blueprint $table) {
        //     $table->foreign('adminUserId')->references('id')->on('admins')->onDelete('cascade');
        // });
        // Schema::table('lvhProposals', function (Blueprint $table) {
        //     $table->foreign('donationId')->references('id')->on('donations')->onDelete('cascade');
        // });
        
        // #Foreign Key for lvhBenf
        // Schema::table('lvhBenifFamilyMembers', function (Blueprint $table) {
        //     $table->foreign('proposalId')->references('id')->on('lvhProposals')->onDelete('cascade');
        // });
        // Schema::table('lvhBenifFamilyMembers', function (Blueprint $table) {
        //     $table->foreign('benfFamilyMemberId')->references('id')->on('familyMembers')->onDelete('cascade');
        // });
        // Schema::table('lvhBenifFamilyMembers', function (Blueprint $table) {
        //     $table->foreign('colonyId')->references('id')->on('colony')->onDelete('cascade');
        // });

        // #Foreign Key for Process
        // Schema::table('process', function (Blueprint $table) {
        //     $table->foreign('userRoleId')->references('id')->on('roles')->onDelete('cascade');
        // });

        // #Foreign Key for Process Step
        // Schema::table('processStep', function (Blueprint $table) {
        //     $table->foreign('userRoleId')->references('id')->on('roles')->onDelete('cascade');
        // });
        // Schema::table('processStep', function (Blueprint $table) {
        //     $table->foreign('processId')->references('id')->on('process')->onDelete('cascade');
        // });

        // Schema::table('cnaDocuments', function (Blueprint $table) {
        //     $table->foreign('activityId')->references('id')->on('activity')->onDelete('cascade');
        // }); 

        //new foreign key added on Oct 19 12:40 PM

        // Schema::table('activityProgramName', function (Blueprint $table) {
        //     $table->foreign('activityId')->references('id')->on('activity')->onDelete('cascade');
        // }); 

        // Schema::table('activity', function (Blueprint $table) {
        //     $table->foreign('activityProgramNameId')->references('id')->on('activityProgramName')->onDelete('cascade');
        // });

        // Schema::table('activity', function (Blueprint $table) {
        //     $table->foreign('activityCategoryId')->references('id')->on('activityCategory')->onDelete('cascade');
        // });

        // Schema::table('activity', function (Blueprint $table) {
        //     $table->foreign('activitySubCategoryId')->references('id')->on('activitySubCategory')->onDelete('cascade');
        // });

        //colony foreign key added on 29 oct by Biswanath banik

      
        Schema::table('colony', function (Blueprint $table) {
            $table->foreign('colonyZPCName')->references('id')->on('employee')->onDelete('cascade');
        });

        Schema::table('colony', function (Blueprint $table) {
            $table->foreign('colonyLead')->references('id')->on('familyMembers')->onDelete('cascade');
        });

        Schema::table('colony', function (Blueprint $table) {
            $table->foreign('colonyStateHeadName')->references('id')->on('familyMembers')->onDelete('cascade');
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
