<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('users')->get()->count() == 0){
            DB::table('users')->insert([
                [
                    'Firstname' => 'Admin',
                    'Lastname' => 'Admin',
                    'Email' => 'admin@gmail.com',
                    'Phone' => '591345678',
                    'Email_verified_at' => date('Y-m-d H:i:s'),
                    'password' => Hash::make('password'),
                    'IsAdmin' => 0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);
        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
