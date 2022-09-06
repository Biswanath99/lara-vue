<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommunicationHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communicationHistory', function (Blueprint $table) {
            $table->id();
            $table->string('toName')->nullable();
            $table->string('toEmailtxt')->nullable();
            $table->string('ccEmailTxt')->nullable();
            $table->string('para1')->nullable();
            $table->string('para2')->nullable();
            $table->string('addComments')->nullable();
            $table->string('reason')->nullable();
            $table->date('date')->nullable();
            $table->string('footer')->nullable();
            $table->unsignedBigInteger('stepOutComeId')->nullable();
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
        Schema::dropIfExists('communicationHistory');
    }
}
