<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->double('subtotal')->unsigned()->default(0);
            $table->double('tax')->unsigned()->default(0);
            $table->double('shipping')->unsigned()->default(0);
            $table->integer('discount')->unsigned()->nullable()->default(0);
            $table->double('total')->unsigned()->default(0);
            $table->integer('status')->unsigned()->default(1)->comment('1: PENDIENTE | 2: APROBADA | 3: RECHAZADA');
            $table->string('traking_code')->nullable();
            $table->string('traking_company')->nullable();
            $table->date('estimated_date')->nullable();
            $table->integer('coupon_id')->unsigned();
            $table->foreign('coupon_id')->references('id')->on('cupons')->onDelete('cascade');
            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->integer('bill_address_id')->unsigned();
            $table->foreign('bill_address_id')->references('id')->on('bill_address')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('payment_info')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
