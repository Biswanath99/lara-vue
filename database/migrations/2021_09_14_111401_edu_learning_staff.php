<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EduLearningStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eduLearningStaff', function (Blueprint $table) {
            $table->id();
            $table->string('eduLearningStaffId')->unique()->nullable();
            $table->string('eduLearningStaffFirstName')->nullable();
            $table->string('eduLearningStaffMiddleName')->nullable();
            $table->string('eduLearningStaffLastName')->nullable();
            $table->date('eduLearningStaffDOB')->nullable();
            $table->string('eduLearningStaffGender')->nullable();
            $table->string('eduLearningStaffType')->nullable();
            $table->string('eduLearningStaffEmailID')->unique()->nullable();
            $table->string('eduLearningStaffMobileNo')->unique()->nullable();
            $table->date('eduLearningStaffStartDate')->nullable();
            $table->date('eduLearningStaffEndDate')->nullable();
            $table->unsignedBigInteger('eduLearningStaffCentreId')->nullable();
            $table->unsignedBigInteger('eduLearningStaffEmployeeId')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eduLearningStaff');
    }
}
