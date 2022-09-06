<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DonerHistoryProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donerHistoryProject', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('donationId')->nullable();
            $table->unsignedBigInteger('projectId')->nullable();
            $table->boolean('activeFlag')->default(false);
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
        Schema::dropIfExists('donerHistoryProject');
    }
}
