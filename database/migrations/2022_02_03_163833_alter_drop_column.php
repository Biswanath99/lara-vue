<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDropColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mouPrnHeader', function (Blueprint $table) {
            $table->dropColumn('trnVoucherEntityName');
            $table->dropColumn('trnVoucherCostCentreName');
        });

        Schema::table('mouPrnDetails', function (Blueprint $table) {
            $table->dropColumn('paymentMode');
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
