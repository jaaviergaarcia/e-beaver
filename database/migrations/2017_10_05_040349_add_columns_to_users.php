<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('last_name')->after('name');
            $table->integer('profile_id')->unsigned()->after('password');
            $table->foreign('profile_id')->references('id')->on('profile')->onDelete('cascade');
            $table->string('phone')->after('profile_id');
            $table->date('birthdate')->nullable()->after('phone');
            $table->integer('status')->unsigned()->comment('1: ACTIVO | 2: INACTIVO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //

            $table->dropColumn('last_name');
            $table->dropColumn('profile_id');
            $table->dropColumn('phone');
            $table->dropColumn('birthdate');
            $table->dropColumn('status');
        });
    }
}
