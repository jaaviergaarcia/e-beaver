<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Models\Country;

class StateTableSeeder extends Seeder
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
    	$countries = Country::all();
    	foreach ($countries as $country) {
    		
	        for($i=0; $i<10; $i++){

	            $array_item = [
	                'name'=>$faker->state(),
	                'code'=>$faker->stateAbbr(),
	                'country_id'=>$country->id
	            ];
	            array_push($items, $array_item);
	        }

	        foreach($items as $item){
	            \App\Models\State::create($item);
	        }
    	}        
    }
}
