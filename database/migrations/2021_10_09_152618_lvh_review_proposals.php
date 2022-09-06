<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LvhReviewProposals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvhReviewProposals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proposalId')->nullable();//FK
            $table->date('reviewDate')->nullable(); //FK
            $table->string('reviewComment')->nullable();//FK
            $table->unsignedBigInteger('adminUserId')->nullable();//FK
            // $table->string('reviewType')->nullable();
            $table->string('reviewStatus')->nullable();
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
        Schema::dropIfExists('lvhReviewProposals');
    }
}
