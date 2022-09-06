<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Commitments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commitments', function (Blueprint $table) {
            $table->id();
            $table->string('commId');
            // $table->bigInteger('commSchdId')->nullable()->unsigned(); //foreign key
            $table->integer('commFrequency');
            $table->integer('commPeriods');
            $table->date('commDate');
            $table->unsignedBigInteger('donationlId')->nullable(); //foreign key
            $table->unsignedBigInteger('currencyId')->nullable();
            $table->string('commAmount');
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
        Schema::dropIfExists('commitments');
    }
}
