<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CnaEventsTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnaEventsTask', function (Blueprint $table) {
            $table->id();
            $table->string('cnaEventsTaskId')->nullable();
            $table->string('cnaEventsTaskName')->nullable();
            $table->string('cnaEventsTaskVendor')->nullable();
            $table->date('cnaEventsTaskCompleteDate')->nullable();
            $table->string('cnaEventsTaskRemarks')->nullable();
            $table->unsignedBigInteger('cnaEventsId')->nullable();
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
        Schema::dropIfExists('cnaEventsTask');
    }
}
