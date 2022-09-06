<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableDropdownValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tableDropdownValues', function (Blueprint $table) {
            $table->id();
            $table->string('tableName')->nullable();
            $table->string('columnName')->nullable();
            $table->string('dropdownValues')->nullable();
            $table->string('parentValues')->nullable();
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
        Schema::dropIfExists('tableDropdownValues');
    }
}
