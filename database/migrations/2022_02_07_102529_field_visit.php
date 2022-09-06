<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FieldVisit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fieldVisit', function (Blueprint $table) {
            $table->id();
            $table->string('visitId')->nullable();
            $table->unsignedBigInteger('colonyId')->nullable(); //FK
            $table->date('visitDate')->nullable();
            $table->string('visitRemarks')->nullable();
            $table->unsignedBigInteger('fieldVisitReportId')->nullable(); //FK
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
        Schema::dropIfExists('fieldVisit');
    }
}
