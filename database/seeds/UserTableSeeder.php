<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Models\Profile;


class UserTableSeeder extends Seeder
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
        $cliente = Profile::where('code','CLIENT')->first();
        //dd($cliente);
        	for ($i=0; $i <2; $i++) { 
        		$array_item=[
	        		'name'=>$faker->name($gender = null),
			        'last_name'=>$faker->lastName(),
			        'email'=>$faker->unique()->freeEmail(),
			        'password'=>$faker->password(),
			        'profile_id'=>$cliente->id,
			        'phone'=>$faker->phoneNumber(),
			        'birthdate'=>$faker->dateTimeThisCentury->format('Y-m-d'),
			        'status'=>$faker->randomDigit(),
			        'created_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
        		];
        		array_push($items, $array_item);
        	}

            $array_item=[
                    'name'=>'administrador',
                    'last_name'=>$faker->lastName(),
                    'email'=>'admin@gmail.com',
                    'password'=>bcrypt('secret'),
                    'profile_id'=>1,
                    'phone'=>$faker->phoneNumber(),
                    'birthdate'=>$faker->dateTimeThisCentury->format('Y-m-d'),
                    'status'=>$faker->randomDigit(),
                    'created_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
                ];

                array_push($items, $array_item);

                foreach ($items as $item) {
                	App\Models\User::create($item);
                }
    }
}
