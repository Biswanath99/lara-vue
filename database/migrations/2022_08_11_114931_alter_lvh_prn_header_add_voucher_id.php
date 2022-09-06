<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLvhPrnHeaderAddVoucherId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lvhPrnHeader', function (Blueprint $table) { 
            $table->string('imisTrnVoucherGuid',64)->nullable();
            $table->unsignedBigInteger('imisTrnVoucherPrimaryId')->nullable();
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
