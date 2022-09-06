<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PartnerMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partnerMembers', function (Blueprint $table) {
            $table->id();
            $table->string('partnerMemberId');
            $table->string('partnerMemberRoleName');
            $table->string('partnerMemberFName');
            $table->string('partnerMemberLName')->nullable();
            $table->string('partnerMemberContactNo')->unique();
            $table->string('partnerMemberEmailId')->unique();
            
            $table->string('partnerMemberBankName');
            $table->string('partnerMemberBankACNo')->unique();
            $table->string('partnerMemberBankIFSC');
            $table->unsignedBigInteger('locationId')->nullable();
            $table->unsignedBigInteger('addressId')->nullable();
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
        Schema::dropIfExists('partnerMembers');
    }
}
