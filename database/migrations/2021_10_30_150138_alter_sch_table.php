<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scholarship', function($table)
        {
            $table->string('scholMaxAmountCurSession')->nullable();
            $table->string('schMaxAmountContract')->nullable();
            $table->string('batchNo')->nullable();
            $table->dropColumn('scholMaxAmount');
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
