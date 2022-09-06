<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLvhProposals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lvhProposals', function($table)
        {
            $table->unsignedBigInteger('parentPropId')->nullable();//FK
            $table->string('filePath')->nullable();
            $table->string('fileFormat')->nullable();
            $table->unsignedBigInteger('donationId')->nullable();//FK
            $table->boolean('active')->default(1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
