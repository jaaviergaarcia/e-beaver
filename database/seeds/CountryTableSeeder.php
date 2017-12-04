<?php

use Illuminate\Database\Seeder;
use Faker\Generator\ as Faker;


class CountryTableSeeder extends Seeder
{
    

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
   /* public function run()
    {
    	
    	$items=[];
    	$faker = Faker::create();
    	for ($i=0; $i < 5; $i++) { 
    	      	
    	      	$arrayItem = [
    	      		'name'=>$faker->country();
    	      		'code'=>$faker->countryCode();
    	      	];
    	 		array_push($items, $arrayItem);
    	}//end For

    	foreach ($items as $item) {
    	      	/App/Models/Country::create($item);
    	} 
    }//end function run */

}//end Class
