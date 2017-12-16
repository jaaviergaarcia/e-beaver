<?php

use Faker\Generator as Faker;


$factory->define(App\Models\Address::class, function (Faker $faker) {
	
    return [ 
        //'street' => $faker->streetName(),
		//'street_number' => $faker->buildingNumber(),
		//'interior_number'=>$faker->randomDigit(),
		//'neighborhood'=>$faker->citySuffix(),
		//'city'=>$faker->city(),
		//'postal_code'=>$faker->postcode(),
		//'state_id'=>$state->id,
		//'user_id'=>$user->id,
		//'phone'=>$faker->phoneNumber(),
		//'instructions'=>$faker->text($maxNbChar = 50),
		//'name_sender'=>$faker->firstNameFemale(),
		//'last_name_sender'=>$faker->lastName(),
		//'created_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get()) 
    ];
});
