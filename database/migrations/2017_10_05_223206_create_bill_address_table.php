<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_address', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('rfc');
            $table->string('business_name');
            $table->string('street');
            $table->string('street_number');
            $table->string('interior_number')->nullable();
            $table->string('neighborhood');
            $table->string('city');
            $table->integer('postal_code');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('bill_address');
    }
}
