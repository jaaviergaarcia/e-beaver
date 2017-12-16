<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Country::class, function (Faker $faker) {
    return [
        'name' => $faker->country(),
		'code' => $faker->countryCode(),
		'created_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
    ];
});
