<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommitmentSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commitmentSchedule', function (Blueprint $table) {
            $table->id();
            $table->string('commSchdId');
            $table->unsignedBigInteger('donationlId')->nullable(); //foreign key
            $table->unsignedBigInteger('commId')->nullable(); //foreign key
            $table->bigInteger('commSchdFrequency');
            $table->bigInteger('commSchdAmount')->nullable();
            $table->integer('currencyId');
            $table->string('commDueDate');
            $table->bigInteger('status');
            $table->string('narration')->nullable();
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
        Schema::dropIfExists('commitmentSchedule');
    }
}
