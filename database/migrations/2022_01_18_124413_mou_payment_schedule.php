<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MouPaymentSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mouPaymentSchedule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mouId'); //FK
            $table->string('mouPaymentScheduleTranchesNo')->nullable();
            $table->string('mouPaymentScheduleTranchesDesc')->nullable();
            $table->date('mouPaymentScheduleDateOfPayment')->nullable();
            $table->integer('mouPaymentSchedulePercentage')->nullable();
            $table->float('mouPaymentScheduleAmtFixed')->nullable();
            $table->string('mouPaymentScheduleReport')->nullable();
            $table->float('mouPaymentScheduleAmtVariable')->nullable();
            $table->string('mouPaymentScheduleBills')->nullable();
            $table->string('mouPaymentScheduleBillsRemarks')->nullable();
            $table->string('mouPaymentScheduleBillsPrnStatus')->nullable();
            $table->string('mouPaymentSchedulePrnGenId')->nullable();
            $table->unsignedBigInteger('prnHeaderId')->nullable(); //FK

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
        Schema::dropIfExists('mouPaymentSchedule');
    }
}
