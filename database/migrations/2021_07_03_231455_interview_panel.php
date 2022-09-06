<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InterviewPanel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviewPanel', function (Blueprint $table) {
            $table->id();
            $table->string('panelSN');
            $table->unsignedBigInteger('sessionId'); //FK
            $table->unsignedBigInteger('scholarshipTypeValueId'); //FK
            $table->date('startDate');
            $table->date('validTillDate');
            $table->string('panelHead');
            $table->string('panelEmailId');
            $table->string('contactPersonContactNo');
            $table->string('status');
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
        Schema::dropIfExists('interviewPanel');
    }
}
