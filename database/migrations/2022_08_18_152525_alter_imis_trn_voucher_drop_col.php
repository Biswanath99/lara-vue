<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterImisTrnVoucherDropCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('imisTrnVoucher', function (Blueprint $table) {
            $table->dropColumn('prnType');
            $table->dropColumn('prnHeaderId');
            $table->dropColumn('prnId');
            $table->dropColumn('prnSelected');
            $table->dropColumn('costCentre');
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
