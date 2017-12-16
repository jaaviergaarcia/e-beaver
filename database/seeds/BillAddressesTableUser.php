<?php

use Illuminate\Database\Seeder;

use Faker\factory as Faker;
use App\Models\User;
use App\Models\State;

class BillAddressesTableUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $randomStateID = State::inRandomOrder()->first(); // trae un dato random de la tabla
    	
        $users = User::all();
        $items= [];
        $faker = Faker::create();
        foreach ($users as $user) {
        	
        	for ($i=0; $i < 2; $i++) { 
		        $array_items = [
		        	'rfc'=> $faker->text($maxNbChars = 10),
		        	'business_name'=>$faker->firstNameMale(),
			        'street' => $faker->streetName(),
					'street_number' => $faker->buildingNumber(),
					'interior_number'=>$faker->randomDigitNotNull(),
					'neighborhood'=>$faker->citySuffix(),
					'city'=>$faker->city(),
					'postal_code'=>$faker->randomDigit(),
					'state_id'=>$randomStateID->id, //aqui apunto al ID que es eñ dato que me interesa
					'user_id'=>$user->id,
					'created_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
				];
				array_push($items, $array_items);
        	}
        	//dd($items);
        	foreach ($items as $item) {
        		\App\Models\Bill_Address::create($item);
        	}
        }
    }
}