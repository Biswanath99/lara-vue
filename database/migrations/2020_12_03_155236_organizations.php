<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Organizations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('organizationId');
            $table->string('organizationType');
            $table->string('organizationShortName')->nullable();
         // $table->string('organizationTypePartner');
         
            $table->string('organizationName');
            $table->string('organizationBeneficiaryName')->nullable();
            $table->string('organizationContactName')->nullable();
            $table->string('organizationContactEmail')->unique()->nullable();
            $table->string('organizationContactNo')->unique()->nullable();

            $table->string('organizationPanNo')->nullable()->unique();
            $table->string('organizationTanNo')->nullable()->unique();
            $table->string('organizationGstNo')->unique()->nullable();

            $table->string('organizationBankName')->nullable();
            $table->string('organizationBankAc')->unique()->nullable();
            $table->string('organizationBankIfscCode')->nullable();
            $table->string('organizationStatus');

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
        Schema::dropIfExists('organizations');
    }
}
