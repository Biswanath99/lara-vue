<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HAid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hAid', function (Blueprint $table) {
            $table->id();
            $table->string('hAidId');
            $table->string('hAidPurpose'); // text
            $table->string('hAidType'); // Dropdown
            $table->string('hAidFcnrType')->nullable(); // Dropdown
            $table->unsignedBigInteger('currencyId')->nullable();//foreign key Dropdown
            $table->string('amount')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('uom')->nullable(); // Dropdown
            $table->string('commitmentType')->nullable();
            $table->date('effectiveDate')->nullable();
            $table->unsignedBigInteger('donorId')->nullable();  //foreign key
            $table->unsignedBigInteger('programId')->nullable();//foreign key 
            $table->unsignedBigInteger('proposalId')->nullable();//foreign key
            $table->unsignedBigInteger('colonyId')->nullable();
            $table->string('state')->nullable();
            $table->string('balanceAmount')->nullable();
            $table->string('hAidReceivedStatus')->nullable();
            $table->string('description')->nullable();
            $table->string('fileName')->nullable();
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
        Schema::dropIfExists('hAid');
    }
}
