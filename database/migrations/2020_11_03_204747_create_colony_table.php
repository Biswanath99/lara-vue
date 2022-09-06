<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColonyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colony', function (Blueprint $table) {
            $table->id();
            $table->string('colonyId');
            $table->string('colonyName');
            $table->string('colonyContactEmailId')->unique()->nullable(); 
            $table->string('colonyCount')->nullable();

            $table->string('colonyContactNo')->unique()->nullable(); //change not null to null
            $table->unsignedBigInteger('colonyLead')->nullable();//FK //family member //new added
            $table->unsignedBigInteger('colonyZPCName')->nullable();//FK  //employee  //new added 
            $table->unsignedBigInteger('colonyStateHeadName')->nullable(); //FK  //family member //change
            $table->unsignedBigInteger('colonyAddressId')->nullable();
            $table->timestamps();

            //dropped

            // $table->string('colonyLeadId');
            // $table->string('colonyLeadName')->nullable();
            // $table->string('colonySpoName')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colony');
    }
}
