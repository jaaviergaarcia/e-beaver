<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTableBillAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('bill_address', 'bill__addresses');
        //Schema::table('profile', function (Blueprint $table) {
            //
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('bill__addresses', 'bill_address');
        //Schema::table('profile', function (Blueprint $table) {
            //
        //});
    }
}
