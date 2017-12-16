<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$items = [];
        $sizes = ['XS','S','M','G','XL','XXL','U'];
        $arrlength = count($sizes);
        $faker = Faker::create();
        for($i=0; $i<$arrlength; $i++)
        { 
            $array_item = [
                'name'=>$sizes[$i]
            ];
            array_push($items, $array_item);
        }

        foreach($items as $item){
            \App\Models\Size::create($item);
        }
        
    }
}
