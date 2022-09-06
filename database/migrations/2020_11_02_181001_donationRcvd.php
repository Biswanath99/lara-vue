<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DonationRcvd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donationRcvd', function (Blueprint $table) {
            $table->id();
            $table->string('dntnRcvdId');
            $table->unsignedBigInteger('donationlId')->nullable(); //foreign key
            $table->date('dntnRcvdDate');
            $table->string('dntnRcvdAmount');
            $table->string('dntnRcvdMode');
            $table->string('dntnRcvdTrxnId');
            $table->unsignedBigInteger('currencyId')->nullable();//foreign key
            $table->unsignedBigInteger('programId')->nullable();//foreign key
            $table->bigInteger('convertionRate');
            $table->bigInteger('convertionAmount');
            $table->string('narration')->nullable();
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
        Schema::dropIfExists('donationRcvd');
    }
}
