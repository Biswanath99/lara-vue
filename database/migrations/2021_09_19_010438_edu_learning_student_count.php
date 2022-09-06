<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EduLearningStudentCount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eduLearningStudentCount', function (Blueprint $table) {
            $table->id();
            $table->string('eduLearningStudentCountId')->unique()->nullable();
            $table->string('eduLearningStudentCountTotal')->nullable();
            $table->date('eduLearningStudentCountAsOn')->nullable();
            $table->unsignedBigInteger('sessionId')->nullable();
            $table->unsignedBigInteger('eduLearningCentreId')->nullable();
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
        Schema::dropIfExists('eduLearningStudentCount');
    }
}
