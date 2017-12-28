<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Models\Product;

class StockTableSeeder extends Seeder
{
   
    public function run()
    {
        $items = [];
        $faker = Faker::create();
        $products = Product::all();

        foreach ($products as $product) {

        	$array_items = [
        	'quatity' =>$faker->numberBetween($min = 1, $max = 10),
			'sku'=> '',
			'product_id'=> $product->id,
			'color_id'=> mt_rand(1,10),
			'size_id'=> mt_rand(1,7)
        	];
        	array_push($items, $array_items);
        }
        foreach ($items as $item) {
        	\App\Models\Stock::create($item);
        }
    }
}
