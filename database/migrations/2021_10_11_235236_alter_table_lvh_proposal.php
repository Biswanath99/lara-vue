<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableLvhProposal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lvhProposals', function (Blueprint $table) {
            $table->date('reviewDate')->nullable(); //FK
            $table->string('reviewComment')->nullable();//FK
            $table->string('reviewStatus')->nullable();
            $table->unsignedBigInteger('reviewAdminUserId')->nullable();//FK
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
