<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LvhProjectBenfTranch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvhProjectBenfTranch', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('BenifIciaryId');        // FK 
            $table->unsignedBigInteger('lvhProjectId');         // FK 
            $table->unsignedBigInteger('lvhProjectBenfId');     // FK
            $table->unsignedBigInteger('lvhProjectTranchesId'); // FK
            $table->float('lvhProjectBenfTranchPayableAmount')->nullable();
            $table->float('lvhProjectBenfTranchPaidAmount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lvhProjectBenfTranch');
    }
}
