<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('quatity')->unsigned()->nullable()->default(0);
            $table->string('sku')->nullable();
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('color_id')->unsigned();
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->integer('size_id')->unsigned();
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
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
        Schema::dropIfExists('stocks');
    }
}