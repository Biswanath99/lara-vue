<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Family extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family', function (Blueprint $table) {
            $table->id();
            $table->string('familyId');

            $table->string('familyFName')->nullable();
            $table->string('familyMName')->nullable();
            $table->string('familyLName')->nullable();
            $table->date('familyDOB')->nullable();                           
            $table->string('familyGender')->nullable(); 

            $table->unsignedBigInteger('colonyId')->nullable();
            $table->string('familyHouseHoldNo');
            $table->string('familyHeadId')->nullable();
            $table->string('familyContactNo')->unique();
            $table->string('familyEmailId')->nullable()->unique();
            $table->bigInteger('familyToiletAvailability');
            $table->string('familyToiletType')->nullable();
            $table->text('familyToiletFacilities')->nullable();
            $table->unsignedBigInteger('toiletId')->nullable();
            $table->bigInteger('familyDrinkingwater');
            $table->bigInteger('familyElectricalConnection');
            $table->bigInteger('familyGasConnection');

            $table->string('familyLandPatta')->nullable(); //land patta
            $table->string('familyOtherEntitlementStatus')->nullable(); // other entitlement
            $table->string('familyTOH')->nullable(); // type of house
            
            $table->string('familyDrinkingwaterSource')->nullable(); //drinking water come from
            $table->string('familyDrinkingwaterCheckOut')->nullable(); //drinking water checkout
            $table->text('familyElectricalConnectionType')->nullable(); //connection type
            $table->boolean('familyRationCard')->nullable();          // Ration Card
            $table->string('familyRationCardType')->nullable();       // ration card type
            // family table end
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
        Schema::dropIfExists('family');
    }
}
