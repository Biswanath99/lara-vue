<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LvhPrnVoucher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvhPrnVoucher', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trnVoucherPrimaryId')->nullable();
            $table->unsignedBigInteger('prnHeaderPrimaryId')->nullable();
            $table->unsignedBigInteger('projectPrimaryId')->nullable();
            $table->string('prnHeaderGenId')->nullable();
            $table->string('voucherGuid')->nullable();
            $table->string('voucherNo')->nullable();
            $table->string('entityName')->nullable();
            $table->string('costCentre')->nullable();
            $table->string('prnType')->nullable();
            $table->boolean('voucherSelected')->default(0);
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
        Schema::dropIfExists('lvhPrnVoucher');
    }
}
