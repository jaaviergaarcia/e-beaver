<?php

use Illuminate\Database\Seeder;


class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Sizes')->insert([
        	'name'=>str_random(10) 
        	]);
    }
}
