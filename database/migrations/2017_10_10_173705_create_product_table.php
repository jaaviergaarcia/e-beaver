<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->string('name');
            $table->string('description');
            $table->string('slug');
            $table->double('price')->unsigned();
            $table->integer('discount_percentage')->unsigned();
            $table->string('code')->nullable();
            $table->integer('status')->default(1)->comment('1: ACTIVO | 2: INACTIVO');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
