<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LvhBenifFamilyMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvhBenifFamilyMembers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proposalId')->nullable();//FK
            $table->unsignedBigInteger('benfFamilyMemberId')->nullable(); //FK
            $table->unsignedBigInteger('colonyId')->nullable();//FK
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
        Schema::dropIfExists('lvhBenifFamilyMembers');
    }
}
