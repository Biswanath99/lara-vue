<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CnaEventsDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cnaEventsDocuments', function (Blueprint $table) {
            $table->id();
            $table->string('cnaEventsDocumentsId')->nullable();
            $table->string('cnaEventsDocumentsTypes')->nullable();
            $table->string('cnaEventsDocumentsName')->nullable();
            $table->string('cnaEventsDocumentsDescription')->nullable();
            $table->string('cnaEventsDocumentsFile')->nullable();
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
        Schema::dropIfExists('cnaEventsDocuments');
    }
}
