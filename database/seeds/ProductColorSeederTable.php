<?php

use Illuminate\Database\Seeder;
use App\Models\Color;

use Faker\Factory as Faker;


class ProductColorSeederTable extends Seeder
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

    	$colors = Color::all();

    	foreach ($colors as $color) {
    		
    		$array_items = [
    			'product_id'=>mt_rand(1,18),
    			'color_id'=>$color->id

    		];

    		array_push($items, $array_items);
    	}
    	foreach ($items as $item) {
    		\App\Models\
    	}

        
    }
}
