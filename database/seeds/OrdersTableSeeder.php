<?php

use Illuminate\Database\Seeder;

use Faker\factory as Faker;
use App\Models\User;
use App\Models\State;
use App\Models\Address;
use App\Models\Bill_Address;
use App\Models\Cupon;


class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$randomCouponID = Cupon::inRandomOrder()->first();
    	$randomStateID = State::inRandomOrder()->first();
    	$randomAddressID = Address::inRandomOrder()->first();
    	$randomBillAddressID = Bill_Address::inRandomOrder()->first();

    	$users = User::all();
    	$items = [];
    	$faker = Faker::create();
    	foreach ($users as $user) {
    		$array_items=[
    			'subtotal'=> $faker->numerify('###.##'),
    			'tax' => $faker->numerify('##.##'),
    			'shipping'=>$faker->numerify('##.##'),
    			'discount'=>$faker->numerify('###.##'),
    			'total'=>$faker->numberBetween($min = 100, $max = 1000),
    			'status'=>$faker->randomDigitNotNull(),
    			'traking_code'=>$faker->numerify('sent code ##'),
    			'traking_company'=>$faker->numerify('company sent code ##'),
    			'estimated_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
    			'coupon_id'=>$randomCouponID->id,
    			'address_id'=>$randomAddressID->id,
    			'bill_address_id'=>$randomBillAddressID->id,
    			'user_id'=>$user->id,
    			'payment_info'=>$faker->bankAccountNumber()

    		];
    		array_push($items, $array_items);
    	}

        foreach ($items as $item) {
        	\App\Models\Order::create($item);
       	}
    }
}