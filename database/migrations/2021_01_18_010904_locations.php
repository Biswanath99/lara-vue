<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Locations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('locationId'); // PLOC
            $table->unsignedBigInteger('organizationId')->nullable();
            $table->string('locationName');
            $table->string('locationType');
            $table->unsignedBigInteger('addressId')->nullable();
            $table->unsignedBigInteger('partnerMemberId')->nullable();
            $table->string('branchManager')->nullable();
            $table->string('branchManagerEmail')->nullable()->unique();
            $table->string('branchManagerContactNo')->nullable()->unique();
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
        Schema::dropIfExists('locations');
    }
}
