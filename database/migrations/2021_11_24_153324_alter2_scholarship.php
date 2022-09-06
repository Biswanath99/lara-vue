<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter2Scholarship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scholarship', function (Blueprint $table) {  
            $table->string('scholMaxAmountCurSession')->nullable();
            $table->string('schMaxAmountContract')->nullable();
            $table->string('changeCourse')->nullable();
            $table->string('changeIns')->nullable();
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
