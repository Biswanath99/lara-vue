<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EduLearningCentre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eduLearningCentre', function (Blueprint $table) {
            $table->id();
            $table->string('eduLearningCentreId')->nullable();
            $table->string('eduLearningCentreName')->nullable();
            $table->string('eduLearningCentreContactNo')->nullable();
            $table->string('eduLearningCentreContactEmailId')->nullable();
            $table->date('eduLearningCentreStartDate')->nullable();
            $table->boolean('eduLearningCentreStatus')->default(1);
            //FK
            $table->unsignedBigInteger('eduLearningCentreDonorId')->nullable();
            $table->unsignedBigInteger('eduLearningCentreDonationId')->nullable();
            $table->unsignedBigInteger('eduLearningCentreColonyId')->nullable();
            $table->unsignedBigInteger('eduLearningCentreAddressId')->nullable();
            $table->unsignedBigInteger('eduLearningCentreEmployeeId')->nullable();
            $table->unsignedBigInteger('eduLearningCentreEmployeeHeadId')->nullable();

            $table->unsignedBigInteger('eduLearningCentreColonyLdrId')->nullable();
            $table->unsignedBigInteger('eduLearningCentreStateLdrId')->nullable();
            
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
        Schema::dropIfExists('eduLearningCentre');
    }
}
