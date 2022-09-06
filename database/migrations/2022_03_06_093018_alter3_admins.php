<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter3Admins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {  
            $table->string('lvhPropNew')->nullable();
            $table->string('lvhPropSubmit')->nullable();
            $table->string('lvhPropReview')->nullable();
            $table->string('lvhPropRevised')->nullable();
            $table->string('lvhPropReCre')->nullable();
            $table->string('lvhPropReSub')->nullable();
            $table->string('lvhPropApprov')->nullable();
            $table->string('lvhPropSpclApprov')->nullable();
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
