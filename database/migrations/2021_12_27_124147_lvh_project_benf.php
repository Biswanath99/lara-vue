<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LvhProjectBenf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvhProjectBenf', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beneficiaryId'); // FK 
            $table->unsignedBigInteger('lvhProjectId')->nullable();  // FK 
            $table->unsignedBigInteger('lvhProposalId')->nullable(); // FK 
            $table->string('lvhProjectBenfType',32)->nullable();
            $table->string('lvhProjectBenfStatus',25)->nullable();
            $table->float('lvhProjectBenfAmount')->nullable();
            $table->float('lvhProjectBenfTotalPaid')->nullable();
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
        Schema::dropIfExists('lvhProjectBenf');
    }
}
