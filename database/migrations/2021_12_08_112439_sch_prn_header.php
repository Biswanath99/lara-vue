<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SchPrnHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schPrnHeader', function (Blueprint $table) {
            $table->id();
          //$table->unsignedBigInteger('scholarshipId');
            $table->unsignedBigInteger('academicYrSessionId')->nullable();
          //$table->unsignedBigInteger('applicationId')->nullable();
            $table->string('prnId')->nullable();
            $table->string('prnType')->nullable();
            $table->string('prnDate')->nullable();
            $table->unsignedBigInteger('prnScholarshipTypeValueId')->nullable();
            $table->string('prnBookedUnder')->nullable();
          
          //$table->string('amountPaidToInstitute')->nullable();
          //$table->string('prnBankAcNo')->nullable();
          //$table->string('prnBankAcHolderName')->nullable();
          //$table->string('prnBankName')->nullable(); 
          //$table->string('prnBankBranchName')->nullable();
          //$table->string('prnBankIFSC')->nullable();
            $table->unsignedBigInteger('prnDonorId')->nullable();
            $table->unsignedBigInteger('prnDonationId')->nullable();
            $table->string('batchNo')->nullable();
            $table->string('academicYr')->nullable();
            $table->string('totalPrnAmount')->nullable();
            $table->string('prnPaymentMode')->nullable();
            $table->string('prnPaymentRemarks')->nullable();
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
        Schema::dropIfExists('schPrnHeader');
    }
}
