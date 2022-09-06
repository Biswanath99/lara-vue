<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApprovedProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvedProject', function($table)
        {
            $table->id();
            $table->string('projId',16);
            $table->string('projName');
            $table->string('projNumber',16);
            $table->string('budgetHeadSlNo',24)->nullable();
            $table->string('budgetHead',32)->nullable();
            $table->unsignedBigInteger('pscmId')->nullable();
            $table->string('projectCostCentre')->nullable();
            $table->string('projApprovalDocName')->nullable();
            $table->string('projApprovalComments')->nullable();
            $table->string('projApprovalDate')->nullable();
            $table->string('filePath')->nullable();
            $table->string('fileFormat')->nullable();
            $table->string('projGrantAmount')->nullable();
            $table->string('projMoniteringCLAmount')->nullable();
            $table->string('projMoniteringSLAmount')->nullable();
            $table->string('projNoOfTranche')->nullable();
            $table->string('projLocation')->nullable();
            $table->string('state')->nullable();
            $table->unsignedBigInteger('lvlProposalId')->nullable();//FK
            $table->unsignedBigInteger('lvlParentPropId')->nullable();//FK
            $table->unsignedBigInteger('donationId')->nullable();//FK
            $table->boolean('active')->default(1)->nullable();
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
        //
    }
}
