<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MouPrnApprovers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mouPrnApprovers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mouPrnHeaderId')->nullable();
            $table->string('mouPrnApproversActivity')->nullable(); 
            $table->unsignedBigInteger('mouPrnApproversEmpId')->nullable();
            $table->string('mouPrnApproversName')->nullable();
            $table->string('mouPrnApproversDesg')->nullable();
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
        Schema::dropIfExists('mouPrnApprovers');
    }
}
