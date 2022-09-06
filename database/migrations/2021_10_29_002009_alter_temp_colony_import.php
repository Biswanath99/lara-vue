<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTempColonyImport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tempColonyImport', function($table)
        {
            $table->dropColumn('colonyLeadId');
            $table->dropColumn('colonySpoName');
            $table->dropColumn('colonyLeadName');
            $table->unsignedBigInteger('colonyLead')->nullable();//FK //family member
            $table->unsignedBigInteger('colonyStateHeadName')->nullable()->change();//FK //family member
            $table->unsignedBigInteger('colonyZPCName')->nullable(); // Fk // employee
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
