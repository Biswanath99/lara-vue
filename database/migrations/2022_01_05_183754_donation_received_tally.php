<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DonationReceivedTally extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donationReceivedTally', function (Blueprint $table) {
            $table->id();
            $table->string('voucher_number')->nullable();
            $table->string('amount')->nullable();
            $table->string('voucherType')->nullable();
            $table->string('narration')->nullable();
            $table->date('voucherDate')->nullable();
            $table->string('ledger')->nullable();
            $table->string('amountForex')->nullable();
            $table->string('currency')->nullable();
            $table->unsignedBigInteger('donationId')->nullable();
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
        Schema::dropIfExists('donationReceivedTally');
    }
}
