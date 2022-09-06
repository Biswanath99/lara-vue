<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Donations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('donationlId');
            $table->string('purpose');
            $table->string('donationType');
            $table->string('commitmentType');
            $table->date('effectiveDate');
            $table->unsignedBigInteger('donorId')->nullable();  //foreign key
            $table->unsignedBigInteger('programId')->nullable();//foreign key 
            $table->unsignedBigInteger('proposalId')->nullable();//foreign key
            $table->integer('unit');
            $table->unsignedBigInteger('currencyId')->nullable();//foreign key
            $table->string('amount');
            $table->string('balanceAmount')->nullable();
            $table->string('donationReceivedStatus')->nullable();
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
        Schema::dropIfExists('donations');
    }
}
