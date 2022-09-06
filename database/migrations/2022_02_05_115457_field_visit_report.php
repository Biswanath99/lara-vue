<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FieldVisitReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fieldVisitReport', function (Blueprint $table) {
            $table->id();
            $table->string('fieldVisitId')->nullable();
            $table->date('fieldVisitFromDate')->nullable();
            $table->date('fieldVisitToDate')->nullable();
            $table->date('fieldVisitDate')->nullable();
            $table->string('fieldVisitSubmittedBy')->nullable();
            $table->string('fieldVisitRemarks')->nullable();
            $table->string('fieldVisitReports')->nullable();
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
        //
    }
}
