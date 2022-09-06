<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter3Donor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donors', function (Blueprint $table) {
            $table->date("indDonorDob")->nullable();
            $table->string("indDonorGender")->nullable();
            $table->string("donorLocation")->nullable();
            $table->string("indDonorPassport")->nullable();
            $table->string("indDonorTaxId")->nullable();
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
