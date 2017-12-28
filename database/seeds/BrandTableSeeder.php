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
        $brands = ['Nike','Adidas','Lenovo','Toshiba','Michael Kors','Mary Kay','LG','Calvin K.','Gucci'];
        $arrlength = count($brands);
        $faker = Faker::create();
        for($i=0; $i<$arrlength; $i++)
        { 
            $array_item = [
                'name'=>$brands[$i]
            ];
            array_push($items, $array_item);
        }
        foreach($items as $item){
            \App\Models\Brand::create($item);
        }
    }
}
