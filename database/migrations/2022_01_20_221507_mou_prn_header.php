<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MouPrnHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mouPrnHeader', function (Blueprint $table) {

            $table->id();
            $table->string('mouPrnHeaderId')->nullable();
            $table->string('mouPrnHeaderType')->nullable();
            $table->string('mouPrnHeaderDate')->nullable();
            $table->string('mouPrnHeaderBookedUnder')->nullable();
            $table->string('mouPrnHeaderFixedAmt')->nullable();
            $table->string('mouPrnHeaderVarAmt')->nullable();
            $table->string('mouPrnHeaderPaymentMode')->nullable();
            $table->string('mouPrnHeaderPaymentRemarks')->nullable();
            $table->string('mouPrnHeaderCurrentTranch')->nullable();
            $table->string('mouPrnHeaderDocFileName')->nullable();
            
            $table->unsignedBigInteger('prnDonorId')->nullable();
            $table->unsignedBigInteger('prnDonationId')->nullable();
            $table->unsignedBigInteger('mouForeignId')->nullable();
            $table->string('trnVoucherGuid')->nullable();
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
        Schema::dropIfExists('mouPrnHeader');
    }
}
