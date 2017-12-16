<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cupon::class, function (Faker $faker) {
    return [
        'start_date'=>$faker->dateTimeThisCentury->format('Y-m-d'),
        'expire_date'=>$faker->dateTimeThisCentury->format('Y-m-d'),
        'uses_limit'=>$faker->randomDigitNotNull(),
        'code'=>$faker->numerify('beaver ###'),
        'status'=>$faker->randomDigitNotNull()
    ];
});
