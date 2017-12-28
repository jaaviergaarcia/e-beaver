<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Models\Category;
use App\Models\Brand;

class ProductTableSeeder extends Seeder
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
        $randomBrandID = Brand::inRandomOrder()->first();
        $categories = Category::all();
        foreach ($categories as $category) {
        		$array_items = [

				'name' =>$faker->numerify('beaver ###'),
				'description' =>$faker->text($maxNbChars = 10),
				'slug'=>$category->slug,
				'price'=>mt_rand(10,100),
				'discount_percentage'=>mt_rand(0,30),
				'code'=>$faker->numerify('ebeaver ###'),
				'status'=>mt_rand(1,2),
				'category_id'=>$category->id,
				'brand_id' => mt_rand(1,9)

        		];
        		//dd($array_items);
        		array_push($items, $array_items);
        	
        }
        foreach ($items as $item) {
        		\App\Models\Product::create($item);
        	}

    }
}
