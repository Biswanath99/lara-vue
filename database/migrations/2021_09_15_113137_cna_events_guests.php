<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CnaEventsGuests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnaEventsGuests', function (Blueprint $table) {
            $table->id();
            $table->string('cnaEventsGuestsId')->nullable();
            $table->string('cnaEventsGuestsName')->nullable();
            $table->string('cnaEventsGuestsTitleOrg')->nullable();
            $table->string('cnaEventsGuestsRole')->nullable();
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
        Schema::dropIfExists('cnaEventsGuests');
    }
}
