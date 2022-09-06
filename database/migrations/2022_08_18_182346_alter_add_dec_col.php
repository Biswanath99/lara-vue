<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddDecCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('donationRcvd', function (Blueprint $table) 
        // {
        //     $table->decimal('dntnRcvdAmount'    , 15,2)->change(); 
        //     $table->decimal('convertionAmount'  , 15,2)->change(); 
        // });

        Schema::table('lvhPrnHeader', function (Blueprint $table) 
        {
            $table->decimal('totalPrnAmount' , 15,2)->change(); 
        });

        // Schema::table('lvhProjectBenfTranch', function (Blueprint $table) 
        // {
        //     $table->decimal('lvhProjectTotalTranchAmount' , 15,2)->change(); 
        //     $table->decimal('lvhProjectTotalBenfAmount'   , 15,2)->change(); 
        // });

        // Schema::table('lvhProjectTranches', function (Blueprint $table) 
        // {
        //     $table->decimal('lvhProjectTranchesAmountPaidToBenf', 15,2)->change(); 
        //     $table->decimal('lvhProjectTranchesAmount'          , 15,2)->change(); 
        // });

        // Schema::table('mouTable', function (Blueprint $table) 
        // {
        //     $table->decimal('mouAmountPayableFixed'   , 15,2)->change(); 
        //     $table->decimal('mouAmountPaidFixed'      , 15,2)->change(); 
        //     $table->decimal('mouAmountPayableVariable', 15,2)->change(); 
        //     $table->decimal('mouAmountPaidVariable'   , 15,2)->change(); 
        // });

        // Schema::table('mouPrnHeader', function (Blueprint $table) 
        // {
        //     $table->decimal('mouPrnHeaderFixedAmt', 15,2)->change(); 
        //     $table->decimal('mouPrnHeaderVarAmt'  , 15,2)->change(); 
        // });

        // Schema::table('mouPrnDetails', function (Blueprint $table) 
        // {
        //     $table->decimal('mouPrnDetailsAmountFixedPayable'     , 15,2)->change(); 
        //     $table->decimal('mouPrnDetailsAmountVariablePayable'  , 15,2)->change(); 
        //     $table->decimal('mouPrnDetailsAmountFixedPaid'        , 15,2)->change(); 
        //     $table->decimal('mouPrnDetailsAmountVariablePaid'     , 15,2)->change(); 
        // });

        // Schema::table('schPrnHeader', function (Blueprint $table) 
        // {
        //     $table->decimal('totalPrnAmount' , 15,2)->change(); 
        // });

        // Schema::table('schPrnDetails', function (Blueprint $table) 
        // {
        //     $table->decimal('totalPurposeAmount', 15,2)->change(); 
        //     $table->decimal('prnAmount'         , 15,2)->change(); 
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
