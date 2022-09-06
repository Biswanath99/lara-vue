<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Activity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table->string('activityId')->nullable();
            $table->string('activityProgramNameId')->nullable();
            $table->string('activityCategoryId')->nullable();
            $table->string('activitySubCategoryId')->nullable();
            $table->date('activityDate')->nullable();
            $table->string('activityLocation')->nullable();
            $table->string('activityDistrict')->nullable();
            $table->string('activityState')->nullable();
            $table->string('activityDescription')->nullable();
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
        Schema::dropIfExists('activity');
    }
}
