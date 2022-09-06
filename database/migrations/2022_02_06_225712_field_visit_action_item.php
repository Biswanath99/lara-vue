<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FieldVisitActionItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fieldVisitActionItem', function (Blueprint $table) {
            $table->id();
            $table->string('actionItemId')->nullable();
            $table->unsignedBigInteger('colonyId')->nullable(); //FK
            $table->string('actionItemDesc')->nullable();
            $table->date('actualDate')->nullable();
            $table->date('completionDate')->nullable();
            $table->string('actionItemRemarks')->nullable();
            $table->string('actionItemStatus')->nullable();
            $table->unsignedBigInteger('fieldVisitReportId')->nullable(); //FK
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
        Schema::dropIfExists('fieldVisitActionItem');
    }
}
