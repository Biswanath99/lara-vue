<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFieldVisitVisitor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fieldVisitVisitor', function (Blueprint $table) {

            $table->unsignedBigInteger('colonyLdrId')->nullable(); //FK
            $table->unsignedBigInteger('stateLdrId')->nullable(); //FK
            $table->dropColumn('familyMemberId');
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
