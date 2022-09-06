<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Designation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designation', function (Blueprint $table) {
            $table->id();
            $table->string('desigName',64)->nullable();
            $table->string('desigLevel',64)->nullable();
            $table->string('desigShortName',16)->nullable();
            $table->unsignedBigInteger('deptId')->nullable(); //FK
            $table->timestamps();
        });

        // Schema::table('designation', function (Blueprint $table) {
        //     $table->foreign('deptId')->references('id')->on('department')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designation');
    }
}
