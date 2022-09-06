<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StepOutcome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stepOutcome', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->date('stepCompDate');
            $table->string('offlineAppMatch')->nullable();
            $table->string('offlineAppAnnMatch')->nullable();
            $table->float('keySubMarksAvgPercentage')->nullable();
            $table->string('docFileDesc')->nullable();
            $table->string('docFileName')->nullable();
            $table->string('docFilePath')->nullable();
            $table->string('docFilePathRev')->nullable();
            $table->string('docFormat')->nullable();
            $table->string('uploadStatus')->nullable();
            $table->string('internalUserId')->nullable();
            $table->string('internalUserName')->nullable();
            // FK
            $table->unsignedBigInteger('outcomeId');
            $table->unsignedBigInteger('processStepId');
            $table->unsignedBigInteger('applicationId')->nullable();
            $table->unsignedBigInteger('keySubMarksExamLevelValueId')->nullable();
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
        Schema::dropIfExists('stepOutcome');
    }
}
