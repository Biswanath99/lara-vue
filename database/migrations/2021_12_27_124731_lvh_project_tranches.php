<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LvhProjectTranches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvhProjectTranches', function (Blueprint $table) {
            $table->id();
            $table->date('lvhProjectTranchesSchDate')->nullable();
            $table->date('lvhProjectTranchesActDate')->nullable();

            // $table->float('lvhProjectTranchesAmountPaidToColonyLeader')->nullable();
            // $table->float('lvhProjectTranchesAmountPaidToStateLeader')->nullable();
            $table->float('lvhProjectTranchesAmountPaidToBenf')->nullable();
            $table->float('lvhProjectTranchesAmount')->nullable();
            $table->string('lvhProjectTranchesStatus')->nullable();
            $table->unsignedBigInteger('lvhProjectId')->nullable();  // FK 
            $table->unsignedBigInteger('lvhProposalId')->nullable(); // FK 
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
        Schema::dropIfExists('lvhProjectTranches');
    }
}
