<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter2LvhProposal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lvhProposals', function (Blueprint $table) {
            $table->date('approvalDate')->nullable(); //FK
            $table->string('approvalComment')->nullable();//FK
            $table->unsignedBigInteger('approvalAdminUserId')->nullable();//FK
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
