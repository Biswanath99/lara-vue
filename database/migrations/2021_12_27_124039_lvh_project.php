<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LvhProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvhProject', function (Blueprint $table) {
            $table->id();
            $table->string('lvhProjectType',32)->nullable();
            $table->string('lvhProjectNo',32)->nullable();
            $table->string('lvhProjectTitle')->nullable();
            $table->string('lvhProjectFinancialYr',10)->nullable();
            $table->string('lvhProjectFileName')->nullable();
            $table->string('lvhProjectFilePath')->nullable();
            $table->string('lvhProjectFileType',25)->nullable();
            $table->string('lvhProjectBugetSlNo',30)->nullable();
            $table->string('lvhProjectBudgetHead',64)->nullable();
           
            $table->float('lvhProjectGrantPaid')->nullable();
            $table->date('lvhProjectApprovalDate')->nullable();
            $table->integer('lvhProjectTranches')->nullable();
            $table->float('lvhProjectGrantAmount')->nullable();
            //$table->float('lvhProjectMonitorAmount')->nullable();
            $table->integer('lvhProjectNoOfBenf')->nullable();
            $table->unsignedBigInteger('pscmId')->nullable(); //FK
            $table->unsignedBigInteger('lvhProposalId'); // FK

            $table->unsignedBigInteger('lvhProjectColonyldrId')->nullable();
            $table->unsignedBigInteger('lvhProjectStateldrId')->nullable();
            $table->unsignedBigInteger('lvhProjectZpcldrId')->nullable();
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
        Schema::dropIfExists('lvhProject');
    }
}
