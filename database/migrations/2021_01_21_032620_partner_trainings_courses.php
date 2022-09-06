<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PartnerTrainingsCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partnerTrainings', function (Blueprint $table) {
            $table->id();
            $table->string('partnerTrainingId');
            $table->string('partnerTrainingDesc')->nullable();
            $table->string('partnerTrainingDuration')->nullable();

            $table->date('partnerTrainingStartDate')->nullable();
            $table->date('partnerTrainingEndDate')->nullable();

            $table->string('partnerTrainingObjectives')->nullable();
            $table->string('partnerTrainingOutcome')->nullable(); 
            $table->boolean('partnerTrainingCertification')->nullable();
            
            $table->string('partnerTrainingFeesType')->nullable();
            $table->string('partnerTrainingFeeAmt')->nullable();
            $table->boolean('partnerTrainingAllocate')->nullable();
            $table->unsignedBigInteger('organizationId')->nullable();
            $table->timestamps();
        });

        Schema::create('partnerCourses', function (Blueprint $table) {
            $table->id();
            $table->string('partnerCourseId');
            $table->string('partnerCourseDesc')->nullable();
            $table->string('partnerCourseDuration')->nullable();
            $table->date('partnerCourseStartDate')->nullable();
            $table->date('partnerCourseEndDate')->nullable();

            $table->string('partnerCourseObjectives')->nullable();
            $table->string('partnerCourseOutcome')->nullable();
            $table->boolean('partnerCourseDegree')->nullable();

            $table->string('partnerCourseFeeAmt')->nullable();
            $table->boolean('partnerCourseAllocate')->nullable();
            $table->unsignedBigInteger('organizationId')->nullable();
            $table->timestamps();
        });

        Schema::create('partnerTrainingLoc', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('partnerTrainingId')->nullable();
            $table->unsignedBigInteger('locationId')->nullable();
            $table->timestamps();
        });

        Schema::create('partnerCourseLoc', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('partnerCourseId')->nullable();
            $table->unsignedBigInteger('locationId')->nullable();
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
        Schema::dropIfExists('partnerTrainings');
        Schema::dropIfExists('partnerTrainingLoc');
        Schema::dropIfExists('partnerCourses');
        Schema::dropIfExists('partnerCourseLoc');
    }
}
