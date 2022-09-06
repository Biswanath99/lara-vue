<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DocumentComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentComments', function (Blueprint $table) {
            $table->id();
            $table->string('docFileDesc')->nullable();
            $table->string('docFileName')->nullable();
            $table->string('docFilePath')->nullable();
            $table->string('docFormat')->nullable();
            $table->string('docStatus')->nullable();
            $table->string('docComments')->nullable();
            $table->string('uploadStatus')->nullable();
            $table->unsignedBigInteger('stepOutcomeId');
            $table->unsignedBigInteger('applicationDocsId');
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
        Schema::dropIfExists('documentComments');
    }
}
