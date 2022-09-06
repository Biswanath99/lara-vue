<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicationInterview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationInterview', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('applicationId'); //FK
            $table->unsignedBigInteger('userId');//FK
            $table->date('intSchDate')->nullable();
            $table->time('intSchTime')->nullable();
            $table->date('intActDate')->nullable();
            $table->bigInteger('intScoreEnglish')->nullable();
            $table->bigInteger('intScoreAptitude')->nullable();
            $table->bigInteger('intScorePersv')->nullable();
            $table->bigInteger('intScoreInfo')->nullable();
            $table->unsignedBigInteger('intPanelId')->nullable(); //FK
            $table->string('intRemarks')->nullable();
            $table->bigInteger('intComplete')->nullable();
            $table->string('intResultStatus')->nullable();
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
        Schema::dropIfExists('applicationInterview');
    }
}
