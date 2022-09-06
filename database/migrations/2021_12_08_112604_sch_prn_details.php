<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SchPrnDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schPrnDetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schPrnHeaderId')->nullable();
            $table->unsignedBigInteger('scholarshipId')->nullable();
            $table->unsignedBigInteger('academicYrSessionId')->nullable();
            $table->unsignedBigInteger('applicationId')->nullable(); 
            $table->unsignedBigInteger('beneficiaryId')->nullable(); 
            $table->unsignedBigInteger('familyMemberId')->nullable(); 
            $table->unsignedBigInteger('partnerId')->nullable(); 
            $table->unsignedBigInteger('commId')->nullable();
            $table->string('batchNo')->nullable(); 
            $table->string('costCenter')->nullable(); 
            $table->string('costCategory')->nullable(); 
            $table->unsignedBigInteger('userId')->nullable();
         // $table->string('prnId')->nullable();
         // $table->string('prnType')->nullable();
         // $table->string('prnDate')->nullable();
         // $table->unsignedBigInteger('prnScholarshipTypeValueId')->nullable();
         // $table->string('prnBookedUnder')->nullable();
            $table->string('prnPurpose')->nullable();
            $table->string('totalPurposeAmount')->nullable();
            $table->string('prnAmount')->nullable();
            $table->date('prnDueDate')->nullable();
            $table->string('prnPreiod')->nullable();
            $table->string('prnBankAcNo')->nullable();
            $table->string('prnBankAcHolderName')->nullable();
            $table->string('prnBankName')->nullable(); 
            $table->string('prnBankBranchName')->nullable();
            $table->string('prnBankIFSC')->nullable();
            $table->string('prnPaymentStatus')->nullable();
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
        Schema::dropIfExists('schPrnDetails');
    }
}
