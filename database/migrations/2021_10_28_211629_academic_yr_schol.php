<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AcademicYrSchol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicYrSchol', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scholarshipId')->nullable(); //FK
            $table->unsignedBigInteger('academicYrSessionId')->nullable(); //FK
            $table->unsignedBigInteger('academicYrDonationId')->nullable(); //FK
            $table->date('academicYrStartDate')->nullable();
            $table->date('academicYrEndDate')->nullable();
            $table->boolean('donationActiveFlag')->nullable();
            $table->date('donationDeactivateDate')->nullable();
            $table->string('academicYrDonationStatus')->nullable();
            $table->string('academicYrScholMaxAmount')->nullable();
            $table->string('academicYrScholTotalPaidAmount')->nullable();
            $table->string('academicYrScholTotalPaidAmountToInstitute')->nullable();
            $table->string('academicYrScholTotalPaidAmountToStudent')->nullable();
            $table->string('academicYrScholTotalBalance')->nullable();
            $table->string('academicYrScholTotalPaidForMessFees')->nullable();
            $table->string('academicYrScholTotalPaidForExaminationFees')->nullable();
            $table->string('academicYrScholTotalPaidForInstituteFees')->nullable();
            $table->string('academicYrScholTotalPaidForHostelFees')->nullable();
            $table->unsignedBigInteger('currencyId')->nullable();//FK
            $table->string('batchNo',10)->nullable();
            $table->string('academicYrScholRemarks')->nullable();
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
        Schema::dropIfExists('academicYrSchol');
    }
}
