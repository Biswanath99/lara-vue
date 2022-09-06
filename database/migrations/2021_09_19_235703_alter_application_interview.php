<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterApplicationInterview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scholarship', function (Blueprint $table) {
            $table->dropColumn('schldShow');
        });
        Schema::table('scholarship', function (Blueprint $table) {
          
            // $table->string('intResultStatus')->nullable();
            $table->string('schldShow')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
