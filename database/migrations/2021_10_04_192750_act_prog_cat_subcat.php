<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActProgCatSubcat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actProgCatSubcat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actProgCatId')->nullable();
            $table->unsignedBigInteger('actSubcatId')->nullable();
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
        Schema::dropIfExists('actProgCatSubcat');
    }
}
