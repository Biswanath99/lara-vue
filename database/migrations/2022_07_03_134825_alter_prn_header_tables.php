<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPrnHeaderTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lvhPrnHeader', function (Blueprint $table) {
            $table->string('lvhBudgetHeadGroup')->nullable(); 
        });

        Schema::table('mouPrnHeader', function (Blueprint $table) {
            $table->string('budgetHeadGroup')->nullable();
            $table->string('budgetHead')->nullable();  
        });

        Schema::table('schPrnHeader', function (Blueprint $table) {
            $table->string('budgetHeadGroup')->nullable();
            $table->string('budgetHead')->nullable();  
            $table->string('transactionNarration')->nullable();
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
