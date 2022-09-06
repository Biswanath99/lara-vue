<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColony extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('colony', function($table)
        {
            $table->dropColumn('colonySpoName');        //dropped
            $table->dropColumn('colonyLeadId');         //dropped
            $table->dropColumn('colonyLeadName');       //dropped

            $table->string('colonyContactNo')->nullable()->change();                  //not null to null //change
            $table->unsignedBigInteger('colonyLead')->nullable();                    //FK //family member //new added
            $table->unsignedBigInteger('colonyStateHeadName')->nullable()->change();//FK //family member //change 
            $table->unsignedBigInteger('colonyZPCName')->nullable();               //Fk //employee //new added

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
