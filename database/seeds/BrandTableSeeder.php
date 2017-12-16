<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BrandTableSeeder extends Seeder
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
        for($i=0; $i<10; $i++)
        { 
            $array_item = [
                'name'=>$faker->colorName()
            ];
            array_push($items, $array_item);
        }

        foreach($items as $item){
            \App\Models\Brand::create($item);
        }
    }
}
