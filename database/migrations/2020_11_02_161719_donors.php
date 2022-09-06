<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Donors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            
            $table->id();
            $table->string('donorId');
            $table->string('donorType');
            $table->string('donorFname')->nullable(); 
            $table->string('donorLname')->nullable();
            $table->string('donorOrgname')->nullable(); 
            $table->string('donorAddln1');
            $table->string('donorAddln2')->nullable();
            $table->unsignedBigInteger('donorAddressId')->nullable();
            $table->string('donorContactname')->nullable();
            $table->string('donorEmail')->unique();
            $table->string('donorMobileNo')->unique();
            $table->string('donorMobilecc');
            $table->string('donorPantan')->unique();
            $table->string('donorOrgPan')->unique()->nullable();
            $table->string('donorGst')->nullable()->unique();
            $table->string('donorDefaultCurr');
            $table->string('donorStatus');
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
        Schema::dropIfExists('donors');
    }
}
