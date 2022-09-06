<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterEmpoyeeIns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employeeHealthInsurance', function (Blueprint $table) {
            $table->date('endDate')->nullable();
            $table->string('healthInsFile')->nullable();
          
        });

        Schema::table('employeeAccdntInsurance', function (Blueprint $table) {
            $table->date('endDate')->nullable();
            $table->string('accidentInsFile')->nullable();
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
