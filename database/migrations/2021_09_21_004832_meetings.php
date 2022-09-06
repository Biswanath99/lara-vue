<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Meetings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->string('meetingsId')->nullable();
            $table->string('meetingsFinancialYear')->nullable();
            $table->string('meetingsDate')->nullable();
            $table->string('meetingsTypes')->nullable();
            $table->string('meetingsDescription')->nullable();
            $table->string('meetingsStatus')->nullable();

            $table->string('meetingsFile1')->nullable();
            $table->string('meetingsFile2')->nullable();
            $table->string('meetingsFile3')->nullable();
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
        Schema::dropIfExists('meetings');
    }
}
