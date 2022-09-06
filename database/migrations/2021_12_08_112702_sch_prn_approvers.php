<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SchPrnApprovers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schPrnApprovers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schPrnHeaderId')->nullable();
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
        Schema::dropIfExists('schPrnApprovers');
    }
}
