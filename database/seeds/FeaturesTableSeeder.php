<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\Product;

class FeaturesTableSeeder extends Seeder
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
        $products = Product::all();

        foreach ($products as $product) {

        	$array_items = [

        		'name' =>$faker->numerify('caracteristca #'),
        		'value'=>$faker->numerify('value ?'),
        		'product_id'=>$product->id
        	];
        	array_push($items, $array_items);
        }
        foreach ($items as $item) {
        	\App\Models\Feature::create($item);
        }
    }
}
