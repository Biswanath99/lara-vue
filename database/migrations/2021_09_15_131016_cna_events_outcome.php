<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CnaEventsOutcome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnaEventsOutcome', function (Blueprint $table) {
            $table->id();
            $table->string('cnaEventsOutcomeId')->nullable();
            $table->string('cnaEventsOutcomeMetric')->nullable();
            $table->string('cnaEventsOutcomeTarget')->nullable();
            $table->string('cnaEventsOutcomeActual')->nullable();
            $table->string('cnaEventsOutcomeRemarks')->nullable();

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
        Schema::dropIfExists('cnaEventsOutcome');
    }
}
