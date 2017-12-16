<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\factory as Faker;


class CountryTableSeeder extends Seeder
{
    

    public function run()
    {

    	factory(App\Models\Country::class, 3)->create();
    	
    	/*
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
        */
    }

}//end Class
