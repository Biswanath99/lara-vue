<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LvhProposals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvhProposals', function (Blueprint $table) {
            $table->id();
            $table->string('proposalId')->nullable();
            $table->unsignedBigInteger('parentPropId')->nullable();//FK
            $table->unsignedBigInteger('colonyId')->nullable();//FK
            $table->string('colonyName')->nullable();
            $table->string('enterpriseName')->nullable();
            $table->string('proposalTitle')->nullable();
            $table->date('proposalDate')->nullable();
            $table->string('pscmNo')->nullable();
            $table->string('proposalAttachmentFile')->nullable();
            $table->string('filePath')->nullable();
            $table->string('fileFormat')->nullable();
            $table->text('proposalSummary')->nullable();
            $table->date('createdDate')->nullable();
            $table->unsignedBigInteger('adminUserId')->nullable();//FK
            $table->date('submitDate')->nullable();
            $table->unsignedBigInteger('donationId')->nullable();//FK
            $table->string('comment')->nullable();
            $table->string('status')->nullable();
            $table->boolean('active')->default(1)->nullable();

            // $table->unsignedBigInteger('parentPropId')->nullable();//FK
            // $table->string('filePath')->nullable();
            // $table->string('fileFormat')->nullable();
            // $table->unsignedBigInteger('donationId')->nullable();//FK
            // $table->boolean('active')->default(1)->nullable();

            $table->date('reviewDate')->nullable(); //FK
            $table->string('reviewComment')->nullable();//FK
            $table->string('reviewStatus')->nullable();
            $table->unsignedBigInteger('reviewAdminUserId')->nullable();//FK

            $table->date('approvalDate')->nullable(); //FK
            $table->string('approvalComment')->nullable();//FK
            $table->unsignedBigInteger('approvalAdminUserId')->nullable();//FK

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
        Schema::dropIfExists('lvhProposals');
    }
}
