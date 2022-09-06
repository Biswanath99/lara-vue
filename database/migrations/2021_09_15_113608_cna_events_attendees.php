<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CnaEventsAttendees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnaEventsAttendees', function (Blueprint $table) {
            $table->id();
            $table->string('cnaEventsAttendeesId')->nullable();
            $table->string('cnaEventsAttendeesCategory')->nullable();
            $table->string('cnaEventsAttendeesExpectedAttendance')->nullable();
            $table->string('cnaEventsAttendeesActualAttendance')->nullable();
            $table->string('cnaEventsAttendeesFile')->nullable();
            $table->unsignedBigInteger('cnaEventsId')->nullable();
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
        Schema::dropIfExists('cnaEventsAttendees');
    }
}
