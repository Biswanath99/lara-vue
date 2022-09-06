<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter4LvhProjectBenf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lvhProjectBenf', function (Blueprint $table) {
            $table->decimal('lvhProjectBenfAmount',15,2)->nullable()->change();
            $table->decimal('lvhProjectBenfTotalPaid',15,2)->nullable()->change();
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
