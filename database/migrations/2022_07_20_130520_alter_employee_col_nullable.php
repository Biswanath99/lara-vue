<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterEmployeeColNullable extends Migration
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
            $table->string('employeePanNo')->nullable()->change();
            $table->string('employeeAadharNo')->nullable()->change();
            $table->string('employeeMobileNo')->nullable()->change();
            $table->string('employeeEmailID')->nullable()->change();
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
