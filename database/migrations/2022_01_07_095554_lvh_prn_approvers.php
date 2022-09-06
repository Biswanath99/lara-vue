<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LvhPrnApprovers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvhPrnApprovers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lvhPrnHeaderId')->nullable();
            $table->string('prnApproverActivity')->nullable(); 
            $table->unsignedBigInteger('prnApproverEmployeeId')->nullable();
            $table->string('prnApproverName')->nullable();
            $table->string('prnApproverDesg')->nullable();
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
        Schema::dropIfExists('lvhPrnApprovers');
    }
}
