<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeySet5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::table('mouTable', function (Blueprint $table) {
            $table->foreign('familyMemberId')->references('id')->on('familyMembers')->onDelete('cascade');
        });

        Schema::table('mouPaymentSchedule', function (Blueprint $table) {
            $table->foreign('mouId')->references('id')->on('mouTable')->onDelete('cascade');
        });

        Schema::table('mouPaymentSchedule', function (Blueprint $table) {
            $table->foreign('prnHeaderId')->references('id')->on('mouPrnHeader');
        });

        Schema::table('mouPrnDetails', function (Blueprint $table) {
            $table->foreign('mouPrnHeaderId')->references('id')->on('mouPrnHeader')->onDelete('cascade');
        });

        Schema::table('mouPrnApprovers', function (Blueprint $table) {
            $table->foreign('mouPrnHeaderId')->references('id')->on('mouPrnHeader')->onDelete('cascade');
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
