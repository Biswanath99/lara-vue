<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImisTrnVoucher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imisTrnVoucher', function (Blueprint $table) {
            $table->id();
            $table->string('guid',64);
            $table->date('date');
            $table->string('voucher_type',1024);
            $table->string('voucher_number',64);
            $table->string('reference_number',64);
            $table->string('narration',4000);
            $table->string('party_name',256);
            $table->string('place_of_supply',256);
            $table->boolean('is_invoice',)->nullable();
            $table->boolean('is_accounting_voucher')->nullable();
            $table->boolean('is_inventory_voucher')->nullable();
            $table->boolean('is_order_voucher')->nullable();
            $table->string('prnHeaderId',45)->nullable();
            $table->unsignedBigInteger('prnId')->nullable();
            $table->string('entityName')->nullable();
            $table->unsignedBigInteger('prnSelected')->nullable();
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
        Schema::dropIfExists('imisTrnVoucher');
    }
}
