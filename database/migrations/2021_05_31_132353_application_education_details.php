<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicationEducationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationEducationDetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('examLevelValueId');// FK DomainValues 
            $table->unsignedBigInteger('examBoardValueId');// FK DomainValues
            $table->unsignedBigInteger('examPassedValueId');// FK DomainValues
            $table->string('examLevelValue')->nullable();
            $table->string('examBoardValue')->nullable();
            $table->string('examPassedValue')->nullable();
            $table->string('mainSubjects')->nullable();
            $table->string('yearOfPassing')->nullable();
            $table->float('percentage')->nullable();
            $table->string('division')->nullable();
            $table->float('percentageKeySub')->nullable();
            $table->unsignedBigInteger('applicationId')->nullable();// FK ApplicationDetails
            $table->unsignedBigInteger('offlineApplicationId')->nullable();// FK offlineApplicationDetails
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
        Schema::dropIfExists('applicationEducationDetails');
    }
}
