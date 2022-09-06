<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDropLvhProposalsMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lvhProposal', function (Blueprint $table){
            Schema::dropColumn('proposalName')->nullable();
            Schema::dropColumn('proposalIdChar')->nullable();
            Schema::dropColumn('benfFamilyMemberName')->nullable();
            Schema::dropColumn('benfFamilyMemberIdChar')->nullable();
            Schema::dropColumn('colonyName')->nullable();
            Schema::dropColumn('colonyIdChar')->nullable();
        });
    }
}
