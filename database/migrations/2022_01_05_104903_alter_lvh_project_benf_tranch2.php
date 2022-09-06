<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLvhProjectBenfTranch2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   

    public function up()
    {
        Schema::table('lvhProjectBenfTranch', function (Blueprint $table) {
            $table->string('lvhPrnGenId')->nullable();
            $table->string('lvhProjectBenfTranchStatus',32)->nullable();
            $table->unsignedBigInteger('lvhPrnHeaderId')->nullable();   // FK
            $table->date('lvhProjectBenfTranchDate')->nullable();
            $table->string('lvhProjectBenfTranchRemark')->nullable();
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
