<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LvhPrnHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvhPrnHeader', function (Blueprint $table) {
            $table->id();
            
            $table->string('prnId')->nullable();
            $table->string('prnType')->nullable();
            $table->string('prnDate')->nullable();
            $table->string('prnBookedUnder')->nullable();
        
            $table->unsignedBigInteger('prnDonorId')->nullable();
            $table->unsignedBigInteger('prnDonationId')->nullable();
           
            $table->string('totalPrnAmount')->nullable();
            $table->string('prnPaymentMode')->nullable();
            $table->string('prnPaymentRemarks')->nullable();

            $table->string('lvhPrnHeaderBudgetHeadSlNo')->nullable();
            $table->string('lvhPrnHeaderBudgetHead')->nullable();
            $table->string('lvhPrnHeaderPSCMName')->nullable();

            $table->string('lvhPrnHeaderProjectNo')->nullable();
            $table->string('lvhPrnHeaderProjectName')->nullable();
            $table->string('lvhPrnHeaderBenfCount')->nullable();
            $table->float('lvhPrnHeaderApprovedGrantAmt')->nullable();

            $table->string('lvhPrnHeaderDelayReason')->nullable();
            $table->string('lvhPrnHeaderSchPayment')->nullable();
            $table->string('lvhPrnHeaderCurrenrTranch')->nullable();

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
        Schema::dropIfExists('lvhPrnHeader');
    }
}
