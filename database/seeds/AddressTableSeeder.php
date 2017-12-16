<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\factory as Faker;
use App\Models\User;
use App\Models\State;

class AddressTableSeeder extends Seeder
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
			        'street' => $faker->streetName(),
					'street_numer' => $faker->buildingNumber(),
					'interior_number'=>$faker->randomDigit(),
					'neighborhood'=>$faker->citySuffix(),
					'city'=>$faker->city(),
					'postal_code'=>$faker->randomDigit(),
					'state_id'=>$randomStateID->id, //aqui apunto al ID que es eñ dato que me interesa
					'user_id'=>$user->id,
					'phone'=>$faker->phoneNumber(),
					'instructions'=>$faker->text($maxNbChar = 50),
					'name_sender'=>$faker->firstNameFemale(),
					'last_name_sender'=>$faker->lastName(),
					'created_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
				];
				array_push($items, $array_items);
        	}
        	//dd($items);
        	foreach ($items as $item) {
        		\App\Models\Address::create($item);
        	}
        }
    }
}
