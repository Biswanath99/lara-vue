<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CnaDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnaDocuments', function (Blueprint $table) {
            $table->id();
            $table->string('cnaDocumentsId')->nullable();
            $table->string('cnaDocumentsCategory')->nullable();
            $table->string('cnaDocumentsTypes')->nullable();
            $table->string('cnaDocumentsName')->nullable();
            $table->text('cnaDocumentsDescription')->nullable();
            $table->string('cnaDocumentsFile')->nullable();
            $table->string('cnaDocumentsVideoId')->nullable();
            $table->string('cnaDocumentsGalleryFlag')->nullable();
            $table->string('cnaDocumentsVideoStatus')->nullable();
            $table->string('cnaDocumentsVideoWatchLink')->nullable();
            $table->date('cnaDocumentsDate')->nullable();
            $table->string('cnaDocumentsTitle')->nullable();
            $table->string('cnaDocumentsProgramName')->nullable();
            $table->unsignedBigInteger('cnaEventsId')->nullable();
            $table->string('userName')->nullable();
            $table->unsignedBigInteger('activityId')->nullable(); // added by biswanath banik on 26 oct 08:40 PM
            $table->timestamps();
        });

        // Schema::table('cnaDocuments', function (Blueprint $table) {
        //     $table->unique(["cnaDocumentsDescription"], 'description_index');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        // Schema::table('cnaDocuments', function (Blueprint $table) {
        //     $table->dropUnique('description_index');
        //   });
        Schema::dropIfExists('cnaDocuments');
    }
}
