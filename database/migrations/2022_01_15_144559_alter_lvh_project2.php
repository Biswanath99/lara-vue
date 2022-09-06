<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLvhProject2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lvhProject', function (Blueprint $table) {
            $table->unsignedBigInteger('lvhProjectColonyldrId')->nullable();
            $table->unsignedBigInteger('lvhProjectStateldrId')->nullable();
            $table->unsignedBigInteger('lvhProjectZpcldrId')->nullable();
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
