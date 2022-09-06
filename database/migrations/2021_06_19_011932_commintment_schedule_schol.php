<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommintmentScheduleSchol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commintmentScheduleSchol', function (Blueprint $table) {
            $table->id();
            $table->string('commSchdIdSchol');
            $table->bigInteger('commFrequencyValueId');
            $table->unsignedBigInteger('scholarshipId'); //FK
            $table->unsignedBigInteger('commIdSchol');//FK
            $table->unsignedBigInteger('beneficiaryTypeValueId');//FK
            $table->string('commPurpose');
            $table->bigInteger('commSchdAmountSchol');
            $table->string('batchNo',10)->nullable();
            $table->unsignedBigInteger('currencyId');//FK
            $table->date('commDueDateSchol');
            $table->string('commRemarksSchol');
            $table->unsignedBigInteger('academicYrSessionId')->nullable();
            $table->string('balanceAmtStatus')->nullable();
            $table->string('commPrnFlag',10)->default('Not Raised')->nullable();
            $table->boolean('commPrnPaidFlag')->default(0)->nullable();
            $table->string('prnId')->nullable();
            $table->string('prnGenId')->nullable();
         // $table->bigInteger('status');
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
        Schema::dropIfExists('commintmentScheduleSchol');
    }
}
