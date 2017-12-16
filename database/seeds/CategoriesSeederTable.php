<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\Models\Category;

class CategoriesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $defualtCategories = [
            ['name'=> 'Damas', 'subs'=> [
                    ['name' => 'Marcas', 'subs' => [
                        ['name' => 'Nike'],
                        ['name' => 'Adidas'],
                        ['name' => 'Wilson']
                    ]],
                    ['name' => 'Ropa', 'subs' => [
                            ['name' => 'Blusas'],
                            ['name' => 'Chamarras'],
                            ['name' => 'Faldas'],
                            ['name' => 'Gorras'],
                            ['name' => 'Ropa interior'],
                            ['name' => 'Short'],
                            ['name' => 'Vestidos']
                        ]
                    ]
                ]
            ],
            ['name'=> 'Caballeros'],
            ['name'=> 'Zapatos'],
            ['name'=> 'Raquetas'],
            ['name'=> 'Bolsas'],
            ['name'=> 'Pelotas']
        ];
        $this->createCategories($defualtCategories);
    }
    public function createCategories($categories, $parent = false) {
        foreach($categories as $i => $item) {
            $data = [
                'name' => $item['name'],
                'slug' => $item['name']
            ];
            if($parent) {
            	dd($parent);
                $data['parent_id'] = $parent->id;
            }
            $category = App\Models\Category::create($data);
            if(isset($item['subs'])) {
                $this->createCategories($item['subs'],  $category);
            }
        }
    }
}