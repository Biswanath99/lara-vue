<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LvhPrnDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvhPrnDetails', function (Blueprint $table) {
            $table->id();
            $table->string('lvhPrnDetailsBenfFName')->nullable();
            $table->string('lvhPrnDetailsBenfLName')->nullable();
            $table->string('lvhPrnDetailsBankName')->nullable();
            $table->string('lvhPrnDetailsBankAcNo')->nullable();
            $table->string('lvhPrnDetailsBankIfsc')->nullable();
            $table->string('lvhPrnDetailsAmount')->nullable();
            $table->unsignedBigInteger('lvhPrnHeaderId')->nullable();
            $table->unsignedBigInteger('lvhProjectBenfTranchId')->nullable();
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
        Schema::dropIfExists('lvhPrnDetails');
    }
}
