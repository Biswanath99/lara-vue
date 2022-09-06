<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAdminPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {  
            $table->string('donor')->nullable();
            $table->string('donation')->nullable();
            $table->string('colony')->nullable();
            $table->string('meetings')->nullable();
            $table->string('cna')->nullable();
            $table->string('hr')->nullable();
            $table->string('family')->nullable();
            $table->string('partner')->nullable();
            $table->string('livelihood')->nullable();
            $table->string('education')->nullable();
            $table->string('siteAdmin')->nullable();
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
