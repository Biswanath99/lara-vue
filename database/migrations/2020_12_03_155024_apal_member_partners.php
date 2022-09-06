<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApalMemberPartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apalMemberPartners', function (Blueprint $table) {
            $table->id();

            $table->string('addApalPartnersRole');
            $table->string('addApalPartnersOrganizationName');
            $table->string('addApalPartnersContactName');
            $table->string('addApalPartnersContactNo')->unique();

            $table->string('addApalPartnersContactEmail')->unique();
            $table->string('addApalPartnersPANno')->unique();
            $table->string('addApalPartnersTANno')->unique();
            $table->string('addApalPartnersGSTno')->unique();

            $table->string('addApalPartnersBankName');
            $table->string('addApalPartnersBankAC')->unique();
            $table->string('addApalPartnersIFSCcode');
        
            $table->unsignedBigInteger('leaderRole')->nullable();
            $table->unsignedBigInteger('apalPartnerAddressId')->nullable();

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
        Schema::dropIfExists('apalMemberPartners');
    }
}
