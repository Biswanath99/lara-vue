<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MeetingsDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetingsDocuments', function (Blueprint $table) {
            $table->id();
            $table->string('filePath')->nullable();
            $table->string('fileType')->nullable();
            $table->string('fileName')->nullable();
            $table->string('fileSize')->nullable();
            $table->string('fileDescribe')->nullable();
            $table->date("uploadDate")->nullable();
            $table->time("uploadTime")->nullable();
            $table->unsignedBigInteger('meetingsId');
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
        Schema::dropIfExists('meetingsDocuments');
    }
}
