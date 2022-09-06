<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MouPrnDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mouPrnDetails', function (Blueprint $table) {

            $table->id();
            $table->string('mouPrnDetailsBenfFName')->nullable();
            $table->string('mouPrnDetailsBenfMName')->nullable(); 
            $table->string('mouPrnDetailsBenfLName')->nullable();
            $table->string('mouPrnDetailsBankBenfName')->nullable();
            $table->string('mouPrnDetailsBankName')->nullable();
            $table->string('mouPrnDetailsBankAcNo')->nullable();
            $table->string('mouPrnDetailsBankIfsc')->nullable();
            $table->float('mouPrnDetailsAmountFixedPayable')->nullable();
            $table->float('mouPrnDetailsAmountVariablePayable')->nullable();
            $table->float('mouPrnDetailsAmountFixedPaid')->nullable();
            $table->float('mouPrnDetailsAmountVariablePaid')->nullable();
            $table->string('paymentMode')->nullable();
            $table->unsignedBigInteger('mouPrnHeaderId')->nullable();
            $table->unsignedBigInteger('mouPaymentScheduleId')->nullable();
            $table->string('costCentreEntityName')->nullable();
            $table->string('costCentreName')->nullable();
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
        Schema::dropIfExists('mouPrnDetails');
    }
}
