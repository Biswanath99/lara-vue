<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter4LvhProjectBenfTranch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lvhProjectBenfTranch', function (Blueprint $table) {
            $table->decimal('lvhProjectBenfTranchPayableAmount',15,2)->nullable()->change();
            $table->decimal('lvhProjectBenfTranchPaidAmount',15,2)->nullable()->change();
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
