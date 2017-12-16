<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\factory as Faker;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Profile::create([
            'id' => 1,
            'name' => 'Administrador',
            'code' => 'ADMIN'
        ]);
        \App\Models\Profile::create([
            'id' => 2,
            'name' => 'Cliente',
            'code' => 'CLIENT'
        ]);
    }
}
