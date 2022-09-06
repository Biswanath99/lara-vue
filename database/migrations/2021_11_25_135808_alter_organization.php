<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterOrganization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organizations', function (Blueprint $table){  

            $table->string('organizationBeneficiaryName')->nullable()->change();
            $table->string('organizationContactName')->nullable()->change();
            $table->string('organizationContactEmail')->nullable()->change();
            $table->string('organizationContactNo')->nullable()->change();

            $table->string('organizationPanNo')->nullable()->change();
            $table->string('organizationTanNo')->nullable()->change();
            $table->string('organizationGstNo')->nullable()->change();

            $table->string('organizationBankName')->nullable()->change();
            $table->string('organizationBankAc')->nullable()->change();
            $table->string('organizationBankIfscCode')->nullable()->change();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
