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
            OrdersTableSeeder::class,
            BrandTableSeeder::class,
            ColorTableSeed::class,
            SizeTableSeeder::class,
            CategoriesSeederTable::class,
            ProductTableSeeder::class,
            StockTableSeeder::class
        ]);
       
    }
}
