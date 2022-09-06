<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaymentMadeSchol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentMadeSchol', function (Blueprint $table) {
            $table->id();
            $table->string('pymntIdSch');
            $table->unsignedBigInteger('scholarshipId');//FK
            $table->date('pymntDateSch');
            $table->string('pymntAmountSch');
            $table->string('pymntModeSch');
            $table->string('pymntTrxnIdSch');
            $table->string('commPurpose');
            $table->unsignedBigInteger('beneficiaryTypeValueId');//FK
            $table->unsignedBigInteger('currencyId');//FK
            $table->bigInteger('convertionRateSch');
            $table->bigInteger('convertionAmountSch');
            $table->string('pmntRemarksSch');
            $table->string('batchNo',10)->nullable();
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
        Schema::dropIfExists('paymentMadeSchol');
    }
}
