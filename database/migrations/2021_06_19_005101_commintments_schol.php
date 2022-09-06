<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommintmentsSchol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commintmentsSchol', function (Blueprint $table) {
            $table->id();
            $table->string('commIdSchol');
            $table->unsignedBigInteger('scholarshipId');//FK
            $table->unsignedBigInteger('beneficiaryTypeValueId');
            $table->string('commPurpose');
            $table->unsignedBigInteger('commFrequencyValueId');//FK
            $table->unsignedBigInteger('commPeriodsSch');
            $table->date('commDateSch');
            $table->string('batchNo',10)->nullable();
            $table->unsignedBigInteger('currencyId');//FK
            $table->bigInteger('commAmountSchol');
            $table->string('commRemarksSchol');
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
        Schema::dropIfExists('commintmentsSchol');
    }
}
