<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('category')->get()->count() == 0){
            DB::table('category')->insert([
                [
                    'CategoryName' => 'მობილურები',
                ],
                [
                    'CategoryName' => 'ნოუთბუქები',
                ],
                [
                    'CategoryName' => 'ტაბლეტები',
                ],
                [
                    'CategoryName' => 'აქსესუარები',
                ]
            ]);
        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
