<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VisitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fieldVisitVisitor', function (Blueprint $table) {
            $table->id();
            $table->string('visitorId')->nullable();
            $table->string('visitorType')->nullable();
            $table->string('visitorName')->nullable();
            $table->string('visitorDesg')->nullable();
            $table->string('guestName')->nullable();
            $table->string('visitorRemarks')->nullable();
            $table->unsignedBigInteger('colonyId')->nullable(); //FK
            $table->unsignedBigInteger('employeeId')->nullable(); //FK
            $table->unsignedBigInteger('familyMemberId')->nullable(); //FK
            $table->unsignedBigInteger('colonyLdrId')->nullable(); //FK
            $table->unsignedBigInteger('stateLdrId')->nullable(); //FK
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
        Schema::dropIfExists('visitorTable');
    }
}
