<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            
            
            CountryTableSeeder::class,
            StateTableSeeder::class,
            ProfileTableSeeder::class,
            UserTableSeeder::class,
            AddressTableSeeder::class,
            BillAddressesTableUser::class,
            CouponsTableSeeder::class,
            BrandTableSeeder::class,
            SizeTableSeeder::class,
            ColorTableSeed::class,
        ]);
       
    }
}
