<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CountryTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $items = [];

        $faker = Faker::create();
        for($i=0; $i<10; $i++)
        { 
            $array_item = [
                'name'=>$faker->country(),
                'code'=>$faker->countryCode(),
                'created_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get())

            ];
            array_push($items, $array_item);
        }

        foreach($items as $item){
            \App\Models\Country::create($item);
        }
    }
}
