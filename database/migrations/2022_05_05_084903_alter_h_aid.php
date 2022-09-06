<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterHAid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hAid', function (Blueprint $table) {
            $table->unsignedBigInteger('colonyId')->nullable();
            $table->string('state')->nullable();
            $table->string('amount')->nullable()->change();
            $table->integer('quantity')->nullable()->change();
            $table->string('uom')->nullable()->change(); // Dropdown
            $table->string('commitmentType')->nullable()->change();
            $table->date('effectiveDate')->nullable()->change();
            $table->string('description')->nullable();
            $table->string('fileName')->nullable();
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
