<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 11; $i++) {
            DB::table('users')->insert([
                'name' => "User{$i}",
                'email' => "user{$i}@example.com",
                'password' => Hash::make('password'),
            ]);
        }
    }
}
