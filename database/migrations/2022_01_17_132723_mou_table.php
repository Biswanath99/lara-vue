<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MouTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mouTable', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('colonyId')->nullable();
            $table->unsignedBigInteger('familyMemberId');
            $table->string('mouId')->nullable();
            $table->string('mouType')->nullable();
            $table->float('mouAmountPayableFixed')->nullable();
            $table->float('mouAmountPaidFixed')->nullable();
            $table->float('mouAmountPayableVariable')->nullable();
            $table->float('mouAmountPaidVariable')->nullable();
            $table->integer('mouTranches')->nullable();
            $table->date('mouStartDate')->nullable();
            $table->date('mouEndDate')->nullable();
            $table->string('mouAttachments')->nullable();
            $table->string('mouStatus')->nullable();
            $table->string('costCentreEntityName')->nullable();
            $table->string('costCentreName')->nullable();
            $table->unsignedBigInteger('donationId')->nullable();
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
        Schema::dropIfExists('mouTable');
    }
}
