<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPrnDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schPrnDetails', function (Blueprint $table) {
            $table->string('totalFeesForYear')->nullable();
            $table->string('transactionType')->nullable();
            $table->string('transactionNarration')->nullable();
            $table->string('commNarration')->nullable();
            $table->string('commPurpose')->nullable();
            $table->string('prnRemark')->nullable();
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
