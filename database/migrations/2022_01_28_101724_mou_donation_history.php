<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MouDonationHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mouDonationHistory', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mouId')->nullable();
            $table->unsignedBigInteger('donationId')->nullable();
            $table->string('mouDonationHistoryDate')->nullable();
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
        Schema::dropIfExists('mouDonationHistory');
    }
}
