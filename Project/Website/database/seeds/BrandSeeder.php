<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('brand')->get()->count() == 0){
            DB::table('brand')->insert([
                [
                    'BrandName' => 'Apple',
                ],
                [
                    'BrandName' => 'Samsung',
                ],
                [
                    'BrandName' => 'Huawei',
                ],
                [
                    'BrandName' => 'Nokia',
                ],
                [
                    'BrandName' => 'Lenovo',
                ],
                [
                    'BrandName' => 'Acer',
                ],
                [
                    'BrandName' => 'Asus',
                ],
                [
                    'BrandName' => 'HP',
                ],
                [
                    'BrandName' => 'Fujitsu',
                ]
            ]);
        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
