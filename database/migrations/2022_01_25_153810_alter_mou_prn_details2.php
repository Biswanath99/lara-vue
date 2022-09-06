<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMouPrnDetails2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mouPrnDetails', function (Blueprint $table) {
            $table->string('mouPrnDetailsBankBenfName')->nullable();
            $table->float('mouPrnDetailsAmountFixedPayable')->nullable();
            $table->float('mouPrnDetailsAmountVariablePayable')->nullable();
            $table->float('mouPrnDetailsAmountFixedPaid')->nullable();
            $table->float('mouPrnDetailsAmountVariablePaid')->nullable();
            $table->string('mouPrnDetailsBenfMName')->nullable(); 
            $table->dropColumn('mouPrnDetailsAmountFixed');
            $table->dropColumn('mouPrnDetailsAmountVariable');
            $table->string('paymentMode')->nullable(); 
        });
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
