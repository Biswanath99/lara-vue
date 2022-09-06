<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CnaEventsGallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnaEventsGallery', function (Blueprint $table) {
            $table->id();
            $table->string('cnaEventsGalleryVideoId')->nullable();
            $table->string('cnaEventsGalleryVideoTitle')->nullable();
            $table->string('cnaEventsGalleryVideoDescription')->nullable();
            $table->string('cnaEventsGalleryVideoFlag')->nullable();
            $table->string('cnaEventsGalleryVideoStatus')->nullable();
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
        Schema::dropIfExists('CnaEventsGallery');
    }
}
