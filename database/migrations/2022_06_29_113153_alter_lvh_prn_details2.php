<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLvhPrnDetails2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lvhPrnDetails', function (Blueprint $table) {
            $table->string('lvhPrnDetailsBenfMName')->nullable(); 
            $table->unsignedBigInteger('lvhPrnDetailsBenfPrimaryId')->nullable(); //FK
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
