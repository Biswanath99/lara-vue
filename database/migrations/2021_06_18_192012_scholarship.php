<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Scholarship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship', function (Blueprint $table) {
            $table->id();
            $table->string('schldShow')->nullable();
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('applicationId')->nullable();//FK
            $table->unsignedBigInteger('offlineApplicationId')->nullable();// FK offlineApplicationDetails
            $table->unsignedBigInteger('selectedForCourseLvlValueId')->nullable();//FK
            $table->unsignedBigInteger('selectedForCourseValueId')->nullable();//FK
            $table->unsignedBigInteger('courseDurationInYears')->nullable();
            $table->unsignedBigInteger('startSession')->nullable();//FK
            $table->date('courseStartDate')->nullable();
            $table->date('courseEndDate')->nullable();
            $table->string('batchNo',10)->nullable();
            $table->unsignedBigInteger('selectedForInstituteId')->nullable();//FK
            $table->unsignedBigInteger('donationlId')->nullable();//FK
            $table->string('donationIdChar')->nullable();
            $table->unsignedBigInteger('currencyId')->nullable();//FK
            $table->unsignedBigInteger('institutePartnerId')->nullable();//FK
            $table->string('studentBeneficiaryType')->nullable();
            $table->unsignedBigInteger('studentBenIeficiaryId')->nullable();//FK
            $table->string('scholMaxAmount')->nullable();
            $table->string('maxInstituteAmt')->nullable();
            $table->string('maxStudentAmt')->nullable();
            $table->string('schStatus')->nullable();
            $table->integer('Active')->nullable();
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
        Schema::dropIfExists('scholarship');
    }
}
