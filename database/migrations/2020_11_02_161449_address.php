<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('addressAddln1')->nullable();
            $table->string('addressAddln2')->nullable();
            $table->string('addressCity')->nullable();
            $table->string('addressDistprov')->nullable();
            $table->string('addressState');
            $table->string('addressPinzip')->nullable();
            $table->string('addressCountry')->nullable();
            $table->integer('addressStatus')->default('0');
            $table->rememberToken();
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
        Schema::dropIfExists('address');
    }
}
