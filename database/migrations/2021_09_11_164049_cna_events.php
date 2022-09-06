<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CnaEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnaEvents', function (Blueprint $table) {
            $table->id();
            $table->string('cnaEventsId');
            $table->string('cnaEventsType');
            $table->string('cnaEventsTitle');
            $table->date('cnaEventsDate');
            $table->string('cnaEventsTime');
            $table->string('cnaEventsDuration');
            $table->text('cnaEventsPurpose')->nullable();	
            $table->text('cnaEventsMessaging')->nullable();
            $table->string('cnaEventsVenue');
            $table->string('cnaEventsContactName')->nullable();
            $table->string('cnaEventsContactNo')->unique();
            $table->string('cnaEventsContactEmail')->unique();
            $table->string('cnaEventsAlternateContactName')->nullable();
            $table->string('cnaEventsAlternateContactNo')->unique()->nullable();
            $table->string('cnaEventsAlternateContactEmail')->unique()->nullable();
            $table->unsignedBigInteger('addressId')->nullable();
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->unsignedBigInteger('sessionId')->nullable();
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
        Schema::dropIfExists('cnaEvents');
    }
}
