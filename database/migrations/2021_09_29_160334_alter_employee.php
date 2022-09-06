<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee', function($table)
        {
            $table->boolean('contractEmployeeConsolidatedSalary')->nullable();
            $table->date('contractEmployeeSalaryEffDate')->nullable();

            $table->string('contractEmployeeTotalSalary')->nullable();
            $table->string('contractEmployeeBasic')->nullable();
            $table->string('contractEmployeeHRA')->nullable();                     
            $table->string('contractEmployeeBasketAllowance')->nullable();  
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
