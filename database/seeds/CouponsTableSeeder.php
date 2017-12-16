<?php

use Illuminate\Database\Seeder;

use Faker\factory as Faker;
class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Models\Cupon::class, 3)->create();
    }
}
