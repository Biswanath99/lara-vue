<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjClPymtSch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projClPymtSch', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projectId')->nullable();
            $table->unsignedBigInteger('colonyLeaderId')->nullable();
            $table->float('pymtAmt')->nullable();
            $table->date('pymtDate')->nullable();
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
        Schema::dropIfExists('projClPymtSch');
    }
}
