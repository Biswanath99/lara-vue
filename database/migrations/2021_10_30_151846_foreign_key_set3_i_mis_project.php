<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeySet3IMisProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('academicYrSchol', function (Blueprint $table) {
            $table->foreign('scholarshipId')->references('id')->on('scholarship')->onDelete('cascade');
        });

        Schema::table('academicYrSchol', function (Blueprint $table) {
            $table->foreign('academicYrSessionId')->references('id')->on('applicationSession')->onDelete('cascade');
        });

        Schema::table('academicYrSchol', function (Blueprint $table) {
            $table->foreign('academicYrDonationId')->references('id')->on('donations')->onDelete('cascade');
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
