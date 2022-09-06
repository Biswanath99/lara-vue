<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCnaEventsDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cnaEventsDocuments', function($table)
        {
            $table->string('cnaEventsDocumentsVideoId')->nullable();
            $table->string('cnaEventsDocumentsVideoFlag')->nullable();
            $table->string('cnaEventsDocumentsVideoStatus')->nullable();
            $table->string('cnaEventsDocumentsVideoWatchLink')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alterCnaEventsDocuments');
    }
}
